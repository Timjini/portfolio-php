function toggle(){
    const launch = document.getElementById("launch")
    const coming = document.getElementById("coming")

    const current = document.getElementById("current")
    const comingSoon = document.getElementById("comingSoon")

    launch.classList.toggle("hidden");
    current.classList.toggle("hidden");

    coming.classList.toggle("hidden");
    comingSoon.classList.toggle("hidden");
}
