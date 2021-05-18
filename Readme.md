# Readme

You must have seen in the package.json file, I have used wait keyword (`live-server --wait=500`) that is because when i make change to my code anywhere in the code (say `server.js` file or other express app code) the browser page (say: `http://localhost:3000/a`) refreshes in that instant only BUT OUR NODEMON server hasn't bee up again yet, so to be able to nodemon restart the server I am using 500ms wait coz that much time is sufficient to run express server again.
