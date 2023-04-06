from flask import Flask
import redis

app = Flask(__name__)
r = redis.Redis(host='redis', port=6379)

@app.route('/')
def hello_world():
    r.set('foo', 'bar')
    return 'Hello World teste!'

if __name__ == '__main__':
    app.run(host='0.0.0.0')