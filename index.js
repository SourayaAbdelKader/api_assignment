const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");
const button3 = document.getElementById("button3");
const button4 = document.getElementById("button4");


// api1, still not working, when I'm clicking the submit button, the php file is downloading on my pc
button1.addEventListener("click", () => {
    fetch("api1.php")
        .then((response) => response.json())
        .then((data) => {
            palindrome = data.palindrome;
            let text = document.createTextNode(palindrome);
            let tag = document.createElement('p')
            let answer = document.getElementById("answer1");
            tag.appendChild(text);
            answer.appendChild(tag);
})});
