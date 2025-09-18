import { Controller } from "@hotwired/stimulus"

// Connects to data-controller="dropdown"
export default class extends Controller {
    static targets = [ "options" ]

    toggle() {
        this.optionsTarget.classList.toggle('hidden')
    }
}
