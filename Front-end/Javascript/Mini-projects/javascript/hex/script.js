let changeColor = () => {
    let num = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F"];

    let hex_code = "#";
    let text_hex = "#"
    for (let i = 0; i < 6; i++) {
        let random_index = Math.floor(Math.random() * num.length);

        hex_code += num[random_index]
    }
    for (let i = 0; i < 6; i++) {
        let random_index = Math.floor(Math.random() * num.length);
        text_hex += num[random_index]
    }
    document.body.style.background = hex_code;
    color_hex = document.getElementById("color-hex").style.color = text_hex;
    color_hex = document.getElementById("color-hex2").style.color = text_hex;
    let replacedHexCode = hex_code.replace("#","");
    document.getElementById("hex-code").innerHTML = replacedHexCode;

} 