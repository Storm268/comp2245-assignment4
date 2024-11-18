document.getElementById("search").addEventListener("click", function () {
    const query = document.getElementById("searchQuery").value.trim();

    const sanitizedQuery = encodeURIComponent(query);

    fetch(`superheroes.php?query=${sanitizedQuery}`)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then((data) => {
            document.getElementById("result").innerHTML = data;
        })
        .catch((error) => {
            console.error("There was a problem with the fetch operation:", error);
            document.getElementById("result").innerHTML = "<p style='color: red;'>An error occurred. Please try again.</p>";
        });
});
