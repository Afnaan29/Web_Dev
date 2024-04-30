let x = document.getElementById("color");
let i = 0;

let changeColor = () => {
    let colours = ["brown", "blue", "green", "purple", "cyan", "yellow"]

    x.style.background = colours[i++]
    document.getElementById("color_num").innerHTML = i + "/" + colours.length;

    if (i > colours.length - 1) {
        i = 0;
    }
}
