function startTime() {
    const today = new Date();
    
    // Get hours, minutes, and AM/PM for time
    let h = today.getHours();
    let m = today.getMinutes();
    let ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12; // Convert to 12-hour format
    h = h ? h : 12; // If hour is 0, set it to 12 (for midnight/noon)
    m = checkTime(m);

    // Get date components
    let month = today.getMonth() + 1; // Months are 0-based, so add 1
    let day = today.getDate();
    let year = today.getFullYear();
    month = checkTime(month);
    day = checkTime(day);

    // Determine the greeting based on the hour
    let greeting;
    if (h >= 0 && h < 12 && ampm === 'AM') {
        greeting = "Good Morning, Admin!";
    } else if (h >= 0 && h < 5 && ampm === 'PM') {
        greeting = "Good Afternoon, Admin!";
    } else {
        greeting = "Good Evening, Admin!";
    }

    // Combine the greeting and time/date into one string
    let output = greeting + "<br> " + h + ":" + m + " " + ampm + " | " + month + "/" + day + "/" + year;

    // Display the combined output
    document.getElementById('dash-greetcard').innerHTML = output;
    
    setTimeout(startTime, 1000); // Update every second
}

function checkTime(i) {
    if (i < 10) { i = "0" + i; } // Add zero in front of numbers < 10
    return i;
}