const express = require('express')
const app = express()
const cors = require('cors')
const {log} = console

const PORT = 3000

app.disable('x-powered-by') // This is to disable x-powered-by header which is only useful if you are using 'helmet', and you must disable this header as the target hackers can launch application specific hacks on your server🤑︎.
app.use(cors())
app.use(express.json())

app.get('/', (req, res) => {
	return res.send("You made a get 🚵︎ request on '/' endpoint.")
})

app.get('/a', (req, res) => {
	return res
		.status(201)
		.send("You made 'get' request on '/a' endpoint, successfully.")
})

app.get('/b', (req, res) => {
	log(req.body)
	return res.send(req.body) // You don't need res.json to serialize js object to json, express does this on its own🤺︎.
})

app.get('/c', (req, res) => {
	return res.send(req.query)
})

app.get('/d', (req, res) => {
	// 🔽︎ send status 200 by default.
	return res.end()
})

app.get('/e', (req, res) => {
	// 🔽︎ send status 200 by default.
	return res.end('You can pass some text data.')
})

app.get('/f', (req, res) => {
	// 🔽︎ send custom status code and can also send objects as well but you need to serialize object first.
	return res.status(207).end(JSON.stringify({cars: 21}))
})

app.listen(PORT, function () {
	console.log('express running on', PORT, '...')
})
