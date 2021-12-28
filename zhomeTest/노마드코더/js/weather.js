const API_KEY = "0f9b478f5862410ba4c483eef84df0f3"

const handleGeoSucces = (position) => {
    const lat = position.coords.latitude;
    const lng = position.coords.longitude;
    const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lng}&appid=${API_KEY}&units=metric`;
    fetch(url).then(response => response.json()).then(data => {
        const city = document.querySelector("#weather span:first-child");
        const weather = document.querySelector("#weather span:last-child");
        const cityName = data.name;
        const cityWeather = data.weather[0].main;
        city.innerText = cityName;
        weather.innerText = `${cityWeather} / ${data.main.temp}`;
    })
}

const handleGeoError = () => {
    alert("No~")
}

navigator.geolocation.getCurrentPosition(handleGeoSucces, handleGeoError);