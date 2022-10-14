const express = require('express')
const bodyParser = require('body-parser')
const mailer = require('./nodemailer')

const app = express()

const PORT = 3001
let user = undefined

app.use('/css', express.static(__dirname + '/build/css'))
app.use('/js', express.static(__dirname + '/build/js'))
app.use('/img', express.static(__dirname + '/build/img'))
app.use(bodyParser.urlencoded({ extended: false }))
app.post('/index', (req, res) => { 
    if(!req.body.email || !req.body.text) return res.sendStatus(400)   
    const message = {        
        to: "nikitastepanovs777@gmail.com",
        subject: 'Новое сообщение с портфолио сайта!',
        text: `Новое сообщение с портфолио сайта:
        
        данные:
        email: ${req.body.email}
        text: ${req.body.text}
        
        `
    }
    mailer(message) 
    user = req.body 
    res.redirect('/index') 
    
})
app.get('/index', (req, res) => { 
    if(typeof user !== 'object') return res.sendFile(__dirname + '/build/index.html')   
    res.send(`Сообщение успешно отправлено!`) 
    user = undefined  
})

app.listen(PORT, () => console.log(`server listening at http://localhost:${PORT}/index`))