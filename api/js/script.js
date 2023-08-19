// Funcionalidad para el navMobile
const navMobile = () => {
  // Header
  const headerEl = document.querySelector(".header");

  // Nav
  const navMobileEl = document.querySelector(".nav--mobile");

  // Botón
  const btnOpenNavMobileEl = document.querySelector(".btn--open-nav-mobile");

  // Íconos de botones
  const btnIconOpenNavMobileEl = document.querySelector(
    ".btn__icon--open-nav-mobile"
  );
  const btnIconCloseNavMobileEl = document.querySelector(
    ".btn__icon--close-nav-mobile"
  );

  // Controlar los estados en base al tipo de dispositivo
  const stateNav = (state, element, movil = true) => {
    // Togglear la sublista
    element.sublist.classList.toggle(state.active);

    // Después de las animaciones, quitar el hidden
    element.sublist.addEventListener("animationend", () => {
      element.sublist.classList.contains(state.inactive)
        ? element.sublist.classList.add(state.hidden)
        : element.sublist.classList.remove(state.hidden);

      element.sublist.classList.remove(state.inactive);
    });

    !element.sublist.classList.contains(state.active)
      ? element.sublist.classList.add(state.inactive)
      : element.sublist.classList.remove(state.inactive, state.hidden);

    // Togglear el item completo con el fondo sólo en móvil
    movil
      ? element.itemSublist.classList.toggle("nav__item--sublist-active")
      : element.btnDropdown.classList.contains("btn--sublist-desktop-active") &&
        !element.sublist.classList.contains(state.active)
      ? element.btnDropdown.classList.remove("btn--sublist-desktop-active")
      : element.btnDropdown.classList.add("btn--sublist-desktop-active");
  };

  btnOpenNavMobileEl.addEventListener("click", () => {
    btnIconCloseNavMobileEl.classList.toggle("btn__icon--hidden");
    btnIconOpenNavMobileEl.classList.toggle("btn__icon--hidden");
    navMobileEl.classList.toggle("nav--active");

    !navMobileEl.classList.contains("nav--active")
      ? navMobileEl.classList.add("nav--inactive")
      : navMobileEl.classList.remove("nav--inactive", "nav--hidden");
  });

  // Que solamente elimine el hidden cuando la clase nav--inactive exista
  navMobileEl.addEventListener("animationend", () => {
    navMobileEl.classList.contains("nav--inactive") &&
      navMobileEl.classList.add("nav--hidden");
    navMobileEl.classList.remove("nav--inactive");
  });

  headerEl.addEventListener("click", e => {
    const btn = e.target.closest(".btn--dropdown");
    if (!btn) return;

    const btnIcon = btn.firstElementChild.nextElementSibling;
    const navItemSubList = btn.parentElement;
    const navSubList = btn.nextElementSibling;
    const navHr = navSubList?.querySelector(".nav__hr--sublist-active");

    // Cambiar el icono del boton
    btnIcon.classList.toggle("fa-angle-down");
    btnIcon.classList.toggle("fa-angle-up");

    if (navItemSubList.classList.contains("nav__item--sublist")) {
      // Togglear el hr activo en vez del sublist-activo cuando se contraiga el navItemSubList
      navHr?.classList?.toggle("nav__hr--active");

      stateNav(
        {
          active: "nav__sublist--active",
          inactive: "nav__sublist--inactive",
          hidden: "nav__sublist--hidden",
        },
        {
          sublist: navSubList,
          itemSublist: navItemSubList,
        }
      );
    } else {
      stateNav(
        {
          active: "nav__sublist--active-desktop",
          inactive: "nav__sublist--inactive-desktop",
          hidden: "nav__sublist--hidden-desktop",
        },
        {
          sublist: navSubList,
          itemSublist: navItemSubList,
          btnDropdown: btn,
        },
        false
      );
    }
  });
};
navMobile();
