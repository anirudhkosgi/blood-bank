from flask import Flask, render_template, request, jsonify

# Initialize the Flask app
app = Flask(__name__)

# Define a route for the homepage
@app.route('/')
def home():
    return "Welcome to your Flask App!"

# Define another route (example of handling GET and POST requests)
@app.route('/example', methods=['GET', 'POST'])
def example():
    if request.method == 'POST':
        data = request.json
        return jsonify({"message": "Data received", "data": data})
    return "This is an example route."

# Run the Flask app
if __name__ == '__main__':
    app.run(debug=True)
