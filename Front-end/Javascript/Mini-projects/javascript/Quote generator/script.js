
let quoteChange = () =>{
    let quotes = {
        " - Mahatma Gandhi": '“You must be the change you wish to see in the world.”',
        " - Mother Teresa": '“Spread love everywhere you go. Let no one ever come to you without leaving happier.”',
        " - Franklin D. Roosevelt": '“The only thing we have to fear is fear itself.”',
    }
    let authors = Object.keys(quotes);

    
    let author = authors[Math.floor(Math.random()*authors.length)]


    let quote = quotes[author]


    document.getElementById("quote").innerHTML = quote;
    document.getElementById("auth").innerHTML = author;

    
}
    



