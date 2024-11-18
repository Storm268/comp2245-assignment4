document.getElementById("search").addEventListener("click", function () {
    // Perform an AJAX request using Fetch API
    fetch("superheroes.php")
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then((data) => {
            // Display the response data in an alert box
            alert(data);
        })
        .catch((error) => {
            console.error("There was a problem with the fetch operation:", error);
        });
});
