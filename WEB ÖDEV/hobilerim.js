
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '13e1e7922emshfb96d38b11b64d3p121492jsn6bea4cd34e67',
		'X-RapidAPI-Host': 'api-football-v1.p.rapidapi.com'
	}
};
  fetch('https://api-football-v1.p.rapidapi.com/v3/timezone', options)
  .then(response => response.json())
  .then(response => console.log(response))
  .catch(err =>console.error(err));
