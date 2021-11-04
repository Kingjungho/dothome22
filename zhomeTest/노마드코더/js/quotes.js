const quotes = [
    {
        quote: "배우고 때때로 익히면, 또한 즐겁지 아니한가?",
        author: "공자",
    },
    {
        quote: "너 스스로를 들여다봐 변화는 너로부터 시작될 거야",
        author: "주토피아",
    },
    {
        quote: "오늘 인생을 바꿔라",
        author: "시몬 드 보부아르",
    },
    {
        quote: "다른 사람이 무엇을 하는지 신경 쓰지 말라",
        author: "윌리엄 보엣커",
    },
    {
        quote: "무슨 일이든 할 수 있다고 생각하는 사람이 결국 해내는 법이다",
        author: "정주영",
    },
    {
        quote: "할 수 있다는 믿음을 가지면 그런 능력이 없을지라도 결국에는 할 수 있는 능력을 갖게 된다",
        author: "마하트마 간디",
    },
    {
        quote: "성공은 부단하게 반복된 작은 노력의 합산이다 ",
        author: "폴. J. 마이어",
    },
    {
        quote: "태도의 차이는 아주 사소하지만 결과의 차이는 아주 거대하다",
        author: "윈스턴 처칠",
    },
    {
        quote: "공부는 하지만 생각을 하지 않으면 길을 잃은 사람이고 생각은 하지만 공부를 하지 않으면 위험한 사람이다. ",
        author: "공자",
    },
    {
        quote: "가르치는 것은 두 번 배우는 것이다.",
        author: "조제프 주베르",
    },
];

const quote = document.querySelector("#quote span:first-child");
const author = document.querySelector("#quote span:last-child");

const todaysQuote = quotes[Math.floor(Math.random() * quotes.length)];

quote.innerText = todaysQuote.quote;
author.innerText = todaysQuote.author;