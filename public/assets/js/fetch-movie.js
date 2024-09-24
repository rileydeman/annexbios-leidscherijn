const token = '50e0ad3617490b19272646df7ce799f0d78d517240e650830a4ddcab9e3bd8aa';
const fetch_url = 'https://annexbios.nickvz.nl/api/v1/movieData/' + id;

// API ID
// console.log(fetch_url)
// const result = data;

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
        // console.log(data); // Handle the response data
        // let result = data;

        console.log(data['data'][0]['description']);
        // console.log(data[0].title);
        // document.write(data[0[api_id]])
        document.getElementById("title-text").innerHTML = data['data'][0]['title'];
        // document.getElementById("result").innerHTML = data['data'][0]['image'];
        // document.getElementById("result").innerHTML = data['data'][0]['description'];
        // document.getElementById("result").innerHTML = data['data'][0]['description'];
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });


// [
//     {
//         "imdb_id": "tt18412256",
//         "api_id": 83,
//         "title": "Alien: Romulus",
//         "description": "Tijdens het verkennen van een verlaten ruimtestation komt een groep jonge ruimtekolonisten oog in oog te staan met de meest angstaanjagende levensvorm in het universum.",
//         "image": "https://annexbios.nickvz.nl/assets/img/movies/tt18412256.jpg",
//         "genres": [
//             "Horror",
//             "Sciencefiction"
//         ],
//         "directors": [
//             {
//                 "name": "Fede Álvarez",
//                 "image": "https://annexbios.nickvz.nl/assets/img/directors/932248.jpg"
//             }
//         ],
//         "actors": [
//             {
//                 "name": "Cailee Spaeny",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/1683343.jpg"
//             },
//             {
//                 "name": "David Jonsson",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/2761308.jpg"
//             },
//             {
//                 "name": "Archie Renaux",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/2164506.jpg"
//             },
//             {
//                 "name": "Isabela Merced",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/1428070.jpg"
//             },
//             {
//                 "name": "Spike Fearn",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/2304140.jpg"
//             },
//             {
//                 "name": "Aileen Wu",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/3948018.jpg"
//             },
//             {
//                 "name": "Rosie Ede",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/1737976.jpg"
//             },
//             {
//                 "name": "Soma Simon",
//                 "image": null
//             },
//             {
//                 "name": "Bence Okeke",
//                 "image": null
//             },
//             {
//                 "name": "Viktor Orizu",
//                 "image": null
//             },
//             {
//                 "name": "Robert Bobroczkyi",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/4848549.jpg"
//             },
//             {
//                 "name": "Trevor Newlin",
//                 "image": null
//             },
//             {
//                 "name": "Daniel Betts",
//                 "image": "https://annexbios.nickvz.nl/assets/img/actors/107733.jpg"
//             }
//         ],
//         "viewing_guides": [
//             {
//                 "age": "16+",
//                 "symbols": [
//                     {
//                         "name": "Angst",
//                         "image": "https://annexbios.nickvz.nl/assets/img/viewing_guides/angst.png"
//                     },
//                     {
//                         "name": "Geweld",
//                         "image": "https://annexbios.nickvz.nl/assets/img/viewing_guides/geweld.png"
//                     },
//                     {
//                         "name": "16+",
//                         "image": "https://annexbios.nickvz.nl/assets/img/viewing_guides/16.png"
//                     }
//                 ]
//             }
//         ],
//         "rating": "7.1",
//         "length": "119",
//         "release_date": "2024-08-13",
//         "trailer_link": "https://www.youtube.com/watch?v=A8CMggxPlcc",
//         "is_adult_movie": 1
//     }
// ]