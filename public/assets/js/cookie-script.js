// Function to get a cookie by name
function getCookie(name) {
    const cookieArr = document.cookie.split(';');
    for (let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].split('=');
        if (name === cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}

// Check cookie status immediately after loading the page
function checkCookieStatus() {
    const cookieName = cookieSettings.cookieName;
    const cookieValue = cookieSettings.cookieValue;
    const cookieAccepted = getCookie(cookieName);

    if (cookieAccepted === cookieValue) {
        // Cookie is already set, hide the banner
        document.getElementById('cookieBanner').style.display = 'none';
    } else {
        // Cookie is not set, show the banner
        document.getElementById('cookieBanner').style.display = 'block';
    }
}

// Run the cookie check immediately when the page loads
document.addEventListener('DOMContentLoaded', function () {
    checkCookieStatus();
});

// Accept cookies and set the cookie when the button is clicked
document.getElementById('acceptCookies').addEventListener('click', function() {
    const cookieName = cookieSettings.cookieName;
    const cookieValue = cookieSettings.cookieValue;
    const durationUnit = cookieSettings.durationUnit;
    const cookieDuration = cookieSettings.cookieDuration;
    const maxAge = (durationUnit === 'hours') ? (cookieDuration * 60 * 60) : (cookieDuration * 24 * 60 * 60); // Convert duration to seconds
    const cookiePath = cookieSettings.cookiePath;
    const cookieDomain = cookieSettings.cookieDomain;

    let cookieString = `${cookieName}=${cookieValue}; path=${cookiePath}; max-age=${maxAge}; domain=${cookieDomain}`;

    // Add Secure flag if enabled
    if (cookieSettings.secureFlag === 'true') {
        cookieString += "; Secure";
    }

    // Set the cookie
    document.cookie = cookieString;

    // Hide the cookie banner immediately after accepting
    document.getElementById('cookieBanner').style.display = 'none';
});

