class CollapseMobileMenu {
    constructor() {
        this.mobileMenu = document.querySelector(".has-modal-open");
        this.subMenu = document.querySelectorAll(".wp-block-navigation-submenu__toggle + .wp-block-navigation__submenu-container");
        this.toggleButton = document.querySelectorAll(".wp-block-navigation-submenu__toggle");
        this.itemWithChild = document.querySelectorAll('.has-child');
        this.events();
    }

    events() {
        this.toggleButton.forEach(item => {
            item.addEventListener("click", (e) => this.openMenu(e))
        })
    };

    openMenu(e) {
        e.path[1].nextSibling.classList.toggle("show");
    };

    }

export default CollapseMobileMenu;