from flask import Flask, render_template, request, redirect, url_for
from flask_sqlalchemy import SQLAlchemy
from flask_wtf import FlaskForm
from wtforms import StringField, SelectField, SubmitField
from wtforms.validators import DataRequired

# Application Configuration
app = Flask(__name__)
app.config['SECRET_KEY'] = 'blood_bank'
app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql+pymysql://root:root@localhost/blood_bank'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False

# Database Initialization
db = SQLAlchemy(app)

# Database Models
class Donor(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(100), nullable=False)
    blood_group = db.Column(db.String(10), nullable=False)
    contact = db.Column(db.String(15), nullable=False)

class Request(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    patient_name = db.Column(db.String(100), nullable=False)
    blood_group = db.Column(db.String(10), nullable=False)
    contact = db.Column(db.String(15), nullable=False)

# Forms
class DonorForm(FlaskForm):
    name = StringField('Name', validators=[DataRequired()])
    blood_group = SelectField('Blood Group', choices=[
        ('A+', 'A+'), ('A-', 'A-'),
        ('B+', 'B+'), ('B-', 'B-'),
        ('AB+', 'AB+'), ('AB-', 'AB-'),
        ('O+', 'O+'), ('O-', 'O-')
    ], validators=[DataRequired()])
    contact = StringField('Contact', validators=[DataRequired()])
    submit = SubmitField('Register')

class RequestForm(FlaskForm):
    patient_name = StringField('Patient Name', validators=[DataRequired()])
    blood_group = SelectField('Blood Group', choices=[
        ('A+', 'A+'), ('A-', 'A-'),
        ('B+', 'B+'), ('B-', 'B-'),
        ('AB+', 'AB+'), ('AB-', 'AB-'),
        ('O+', 'O+'), ('O-', 'O-')
    ], validators=[DataRequired()])
    contact = StringField('Contact', validators=[DataRequired()])
    submit = SubmitField('Request Blood')

# Helper Functions
def create_tables():
    db.create_all()

# Routes
@app.route('/')
def home():
    return render_template('index.html')

@app.route('/donors', methods=['GET', 'POST'])
def donors():
    form = DonorForm()
    if form.validate_on_submit():
        donor = Donor(
            name=form.name.data,
            blood_group=form.blood_group.data,
            contact=form.contact.data
        )
        db.session.add(donor)
        db.session.commit()
        return redirect(url_for('donors'))
    all_donors = Donor.query.all()
    return render_template('donors.html', form=form, donors=all_donors)

@app.route('/requests', methods=['GET', 'POST'])
def blood_requests():
    form = RequestForm()
    if form.validate_on_submit():
        blood_request = Request(
            patient_name=form.patient_name.data,
            blood_group=form.blood_group.data,
            contact=form.contact.data
        )
        db.session.add(blood_request)
        db.session.commit()
        return redirect(url_for('blood_requests'))
    all_requests = Request.query.all()
    return render_template('requests.html', form=form, requests=all_requests)

# Application Entry Point
if __name__ == '__main__':
    with app.app_context():
        create_tables()  # Ensure tables are created
    app.run(debug=True)
