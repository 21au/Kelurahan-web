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
                // Pastikan composer sudah terinstall di environment Jenkins agent
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
                sh 'php artisan test'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t kelurahan-web .'
            }
        }

        stage('Run Container') {
            steps {
                // Stop dan hapus container lama jika ada
                sh '''
                    if [ $(docker ps -q -f name=kelurahan-web) ]; then
                        docker stop kelurahan-web
                    fi
                    if [ $(docker ps -a -q -f name=kelurahan-web) ]; then
                        docker rm kelurahan-web
                    fi
                '''
                // Run container baru
                sh 'docker run -d -p 8888:80 --name kelurahan-web kelurahan-web'
            }
        }
    }
}
