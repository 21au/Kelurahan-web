pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/21au/Kelurahan-web.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                bat 'docker build -t kelurahan-web .'
            }
        }

        stage('Run Container') {
            steps {
                bat 'docker run -d -p 8000:8000 --name kelurahan-web kelurahan-web'
            }
        }
    }
}
