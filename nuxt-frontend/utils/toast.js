import { useToast } from "vue-toastification";

export function successToast(message) {
    useToast().success(message, {
        position: "top-right",
        duration: 3000,
    });
}

export function errorToast(message) {
    useToast().error(message, {
        position: "top-right",
        duration: 3000,
    });
}
