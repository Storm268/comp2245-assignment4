document.getElementById("search").addEventListener("click", function () {
    // Get the user input
    const query = document.getElementById("searchQuery").value.trim();

    // Sanitize input (basic client-side sanitization to remove special characters)
    const sanitizedQuery = encodeURIComponent(query);

    // Perform an AJAX request using Fetch API with a query parameter
    fetch(`superheroes.php?query=${sanitizedQuery}`)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then((data) => {
            // Display the response data in the result div
            document.getElementById("result").innerHTML = data;
        })
        .catch((error) => {
            console.error("There was a problem with the fetch operation:", error);
            document.getElementById("result").innerHTML = "<p>There was an error processing your request.</p>";
        });
});
