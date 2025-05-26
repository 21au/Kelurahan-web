pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/21au/Kelurahan-web.git'
            }
        }

        stage('Test') {
            steps {
                bat 'echo Hello Windows'
            }
        }

        stage('Build Docker Image') {
            steps {
                bat 'docker build -t kelurahan-web .'
            }
        }

        stage('Run Container') {
            steps {
                // Stop dan hapus container lama jika ada, tanpa error jika tidak ada
                bat '''
                docker stop kelurahan-web || exit 0
                docker rm kelurahan-web || exit 0
                docker run -d -p 8000:8000 --name kelurahan-web kelurahan-web
                '''
            }
        }
    }
}
