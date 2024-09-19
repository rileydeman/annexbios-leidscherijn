fetch(fetch_url, {
    method: 'GET',
    headers: {
        'Authorization': `Bearer ${token}`, // Set the Authorization header with the token
        'Content-Type': 'application/json' // Set the Content-Type header if you're sending JSON data
    },
    // body: JSON.stringify(data) // Correct the data reference
})
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json(); // Assuming the response is JSON
    })
    .then(data => {
        console.log(data); // Handle the response data
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
