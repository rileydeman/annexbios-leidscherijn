const token = '50e0ad3617490b19272646df7ce799f0d78d517240e650830a4ddcab9e3bd8aa';
const fetch_url = 'https://annexbios.nickvz.nl/api/v1/movieData';

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
