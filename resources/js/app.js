import "./bootstrap";
// resources/js/app.js
import axios from "axios";

axios.defaults.headers.common["X-CSRF-TOKEN"] = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
