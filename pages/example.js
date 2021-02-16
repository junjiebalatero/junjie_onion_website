function fetchData() {
	fetch('https://junjienotes.herokuapp.com/api/posts')
	//fetch('https://reqres.in/api/users')
	  .then(response => {	  	
	  	if (!response.ok) {
	  		throw Error("ERROR");
	  	}
		return response.json();		
	})
	  .then(data => {
	  	console.log(data);
	  	const html = data.map(posts => {
	  		return `
	  		<div class="posts">
	  		<p>Date Posted: ${posts.date}</p>
	  		<p>Title: ${posts.title}</p>
	  		<p>Body: ${posts.body}</p>
	  		</div>
	  		`;
	  	})
	  	.join("");
	  	console.log(html);
	  	document.querySelector('#app').insertAdjacentHTML("afterbegin", html);
	  })
	  .catch(error => {
	  	console.log(error)
	  });
}

fetchData();
