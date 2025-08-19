# Project Structure – SNEN

Ce document explique la structure recommandée pour le projet **SNEN** développé par Viraza SARL.  
Il permet aux contributeurs et aux utilisateurs techniques de comprendre l’organisation du code et des ressources.  

---

## 📂 Structure générale du dépôt

```
snen/
│
├── 📄 README.md              → Présentation du projet
├── 📄 LICENSE.md             → Licence d’utilisation (non commerciale)
├── 📄 CONTRIBUTING.md        → Règles de contribution
├── 📄 STRUCTURE.md           → Ce document (explication de la structure)
│
├── 📂 docs/                  → Documentation utilisateur et technique
│   ├── guide-utilisateur.pdf
│   └── api-reference.md
│
├── 📂 src/                   → Code source principal de l’application
│   ├── backend/              → API, logique métier, base de données
│   │   ├── models/           → Modèles de données (étudiants, enseignants, etc.)
│   │   ├── controllers/      → Contrôleurs (gestion des requêtes et règles métier)
│   │   ├── services/         → Services (paiement, notifications, etc.)
│   │   └── utils/            → Fonctions utilitaires
│   │
│   └── frontend/             → Interface utilisateur (web/app)
│       ├── components/       → Composants réutilisables (UI)
│       ├── pages/            → Pages principales (login, tableau de bord, etc.)
│       ├── assets/           → Images, CSS, fichiers statiques
│       └── hooks/            → Fonctions et gestion des états
│
├── 📂 tests/                 → Tests unitaires et d’intégration
│   ├── backend/
│   └── frontend/
│
├── 📂 config/                → Fichiers de configuration (env, base de données, serveur)
│   ├── database.yml
│   ├── app.env.example
│   └── settings.json
│
└── 📂 scripts/               → Scripts utilitaires (migration DB, build, déploiement)
    └── deploy.sh
```

---

## 📝 Notes
- La structure peut évoluer selon les besoins (API REST, microservices, etc.).  
- Les noms de dossiers doivent rester clairs et explicites.  
- Toute modification de la structure doit être documentée dans ce fichier.  

---

## 📬 Contact
Pour toute question concernant l’architecture ou la structure du projet :  
📧 dev@viraza.net
📍 Viraza SARL – Kinshasa, RDC  
