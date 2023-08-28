
    const userForm = document.getElementById('user-form');

    userForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;

        fetch("create.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ name: name, email: email })
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });