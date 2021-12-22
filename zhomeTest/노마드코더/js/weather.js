

const handleGeoSucces = (position) => {
    const lat = position.coords.latitude;
    const lng = position.coords.longitude;
    console.log(`You live it, ${lat} ${lng}`);
}

const handleGeoError = () => {
    alert("No~")
}

navigator.geolocation.getCurrentPosition(handleGeoSucces, handleGeoError);