# Readme

You must have seen in the package.json file, I have used wait keyword (`live-server --wait=500`) that is because when i make change to my code anywhere in the code (say `server.js` file or other express app code) the browser page (say: `http://localhost:3000/a`) refreshes in that instant only BUT OUR NODEMON server hasn't bee up again yet, so to be able to nodemon restart the server I am using 500ms wait coz that much time is sufficient to run express server again.

## Another fun thing

This refreshing mechaninsm is just a connection to browser to the local code watching, that means you may put `https://www.wikidata.org/` in your `Actual Server Address` field in your `liver-server` browser extension settings and open `https://www.wikidata.org/` in browser and whenever you make changes to your local code `live-server` watching locally will send signal to the browser to refresh the page. Also, you can set the delay to watch for all file changes like I have added in the current case of express-nodmon-server watching solution. Yikes 🤺︎🤺︎🤺︎!!
