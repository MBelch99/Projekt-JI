// hide all forms
const hideAllForms = () => {
    document.querySelectorAll(".bookForm").forEach(form => {
        form.style.display = "none";
    });
}
hideAllForms();

const showForm = (id) => {
    hideAllForms();
    document.querySelector(`#${id}`).style.display = "block";
    document.querySelector(`#${id}`).scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
}

document.querySelector("#demoBtn").addEventListener("click", () => {
    showForm("nemo");
});
document.querySelector("#psyBtn").addEventListener("click", () => {
    showForm("psy");
});
document.querySelector("#autaBtn").addEventListener("click", () => {
    showForm("auta");
});
document.querySelector("#badboysBtn").addEventListener("click", () => {
    showForm("badboys");
});