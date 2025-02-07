function handleCredentialResponse(response) {
  console.log("Encoded JWT ID token: " + response.credential);

  // Send token to PHP backend
  fetch("Home.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `id_token=${response.credential}`,
  })
    .then((res) => res.text())
    .then((data) => {
      console.log("Server Response:", data);
      window.location.href = "Home.php"; // Redirect if successful
    })
    .catch((err) => console.error("Error:", err));
}
