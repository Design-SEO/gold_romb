function slideToggle(el, duration = 300) {
  if (!el) return;
  const isOpen = el.dataset.sliding === "open";

  el.style.transition = `height ${duration}ms ease`;
  el.style.overflow = "hidden";
  el.dataset.sliding = isOpen ? "closed" : "open";
  el.style.display = isOpen ? "none" : "flex";
  requestAnimationFrame(() => {
    const height = isOpen ? 0 : el.scrollHeight;
    el.style.height = height + "px";
  });
}

// Универсальный инициализатор табов (по индексам)
function setupTabs(titlesSel, contentsSel, activeClass = "active") {
  const titles = Array.from(document.querySelectorAll(titlesSel));
  const contents = Array.from(document.querySelectorAll(contentsSel));
  if (!titles.length || !contents.length) return;

  titles.forEach((t, i) => {
    t.addEventListener("click", () => {
      titles.forEach((x) => x.classList.remove(activeClass));
      contents.forEach((x) => x.classList.remove(activeClass));
      t.classList.add(activeClass);
      if (contents[i]) contents[i].classList.add(activeClass);
    });
  });
}

// Делегированное переключение .active и синхронизация чекбокса
function toggleByTitle(
  e,
  itemSel,
  titleSel,
  checkboxSel = 'input[type="checkbox"]'
) {
  const title = e.target.closest(titleSel);
  if (!title) return false;
  const item = title.closest(itemSel);
  if (!item) return false;
  const input = item.querySelector(checkboxSel);
  const willActivate = !item.classList.contains("active");
  item.classList.toggle("active", willActivate);
  if (input) input.checked = willActivate;
  return true;
}
function toggleByCheckbox(e, itemSel, checkboxSel = 'input[type="checkbox"]') {
  const checkbox = e.target.closest(`${itemSel} ${checkboxSel}`);
  if (!checkbox) return false;
  const item = checkbox.closest(itemSel);
  if (!item) return false;
  item.classList.toggle("active", checkbox.checked);
  return true;
}

/* ========= init ========= */
document.addEventListener("DOMContentLoaded", () => {
  // Modal close
  document.querySelectorAll('[data-dismiss="modal"]').forEach((btn) => {
    btn.addEventListener("click", () => {
      const modal = btn.closest(".modal");
      if (modal) modal.classList.remove("open");
    });
  });

  // Header hamburger
  const burger = document.querySelector(".header-hamburger");
  if (burger) {
    burger.addEventListener("click", () => {
      burger.classList.toggle("active");
      const header = burger.closest(".header");
      const menu = header && header.querySelector(".header-menu");
      if (menu) slideToggle(menu, 300);
    });
  }

  // Education accordion (один активный)
  document.querySelectorAll(".education-item-title").forEach((title) => {
    title.addEventListener("click", () => {
      document
        .querySelectorAll(".education-item")
        .forEach((i) => i.classList.remove("active"));
      const item = title.closest(".education-item");
      if (item) item.classList.add("active");
    });
  });

  // Tabs: learn & assets
  setupTabs(".learn-list-title", ".learn-list-content-item");
  setupTabs(".assets-title", ".assets-content-item");

  // Делегирование для metrics + faq
  document.addEventListener("click", (e) => {
    // METRICS
    if (toggleByTitle(e, ".metrics-item", ".metrics-item-title-wrap")) return;
    if (toggleByCheckbox(e, ".metrics-item")) return;

    // FAQ
    if (toggleByTitle(e, ".faq-item", ".faq-item-title")) return;
    if (toggleByCheckbox(e, ".faq-item")) return;
  });
});
