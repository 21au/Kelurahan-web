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
                sh 'docker build -t kelurahan-web .'
            }
        }

        stage('Run Container') {
            steps {
                sh 'docker stop kelurahan-web || true'
                sh 'docker rm kelurahan-web || true'
                sh 'docker run -d -p 8888:80 --name kelurahan-web kelurahan-web'
            }
        }
    }
}
