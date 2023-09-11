# Passi post-clone di una repo di Laravel
1. Clono la repo del nuovo esercizio (che probabilmente è la copia del template)
2. Copio il file .env.example e lo rinomino in .env (senza cancellare il file .env.example)
3. Apro il terminale ed eseguo il comando composer install
4. Dopo l'esecuzione di composer install, eseguo nel terminale il comando php artisan key:generate
5. Dopo l'esecuzione di php artisan key:generate, eseguo nel terminale il comando npm i
6. Dopo l'esecuzione di npm i:
    a. Avvio il server di Laravel con php artisan serve e di fianco avvio npm run dev
    b. Eseguo il comando npm run build e poi avvio il server di Laravel con php artisan serve

