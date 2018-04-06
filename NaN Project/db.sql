-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 06 avr. 2018 à 22:54
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `NaN`
--

-- --------------------------------------------------------

--
-- Structure de la table `BonusMalus`
--

CREATE TABLE `BonusMalus` (
  `ID` int(11) NOT NULL,
  `EtudiantsGroupes` varchar(255) NOT NULL,
  `BonusMalus` int(11) NOT NULL,
  `MotifsBonusMalus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CommentairesEtudiants`
--

CREATE TABLE `CommentairesEtudiants` (
  `ID` int(11) NOT NULL,
  `Etudiants` varchar(255) NOT NULL,
  `Commentaires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CommentairesGroupes`
--

CREATE TABLE `CommentairesGroupes` (
  `ID` int(11) NOT NULL,
  `Groupe` varchar(255) NOT NULL,
  `Commentaires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EquipeA`
--

CREATE TABLE `EquipeA` (
  `ID` int(11) NOT NULL,
  `Membres` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Localisation` varchar(255) NOT NULL,
  `Groupe` varchar(255) NOT NULL,
  `Activite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EquipeZ`
--

CREATE TABLE `EquipeZ` (
  `ID` int(11) NOT NULL,
  `Membres` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Localisation` varchar(255) NOT NULL,
  `Activite` varchar(255) NOT NULL,
  `Groupe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Etudiants`
--

CREATE TABLE `Etudiants` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(225) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Localisation` varchar(255) NOT NULL,
  `Activite` varchar(255) NOT NULL,
  `Groupe` varchar(255) NOT NULL,
  `Equipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EtudiantsNotes`
--

CREATE TABLE `EtudiantsNotes` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Matieres` varchar(255) NOT NULL,
  `Notes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Ex-Etudiants`
--

CREATE TABLE `Ex-Etudiants` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Ex-Groupe` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Localisation` varchar(255) NOT NULL,
  `Moyenne` int(11) NOT NULL,
  `Appreciation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Groupes`
--

CREATE TABLE `Groupes` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Equipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `GroupesNotes`
--

CREATE TABLE `GroupesNotes` (
  `ID` int(11) NOT NULL,
  `Groupe` varchar(255) NOT NULL,
  `Matieres` varchar(255) NOT NULL,
  `Notes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LikeEtudiants`
--

CREATE TABLE `LikeEtudiants` (
  `Etudiants` varchar(255) NOT NULL,
  `Like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LikeGroupes`
--

CREATE TABLE `LikeGroupes` (
  `Groupes` varchar(255) NOT NULL,
  `Like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Modules`
--

CREATE TABLE `Modules` (
  `ID` int(11) NOT NULL,
  `Module` varchar(255) NOT NULL,
  `DateAjoute` datetime NOT NULL,
  `DateFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Projets`
--

CREATE TABLE `Projets` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `DateAjoute` datetime NOT NULL,
  `DateFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ProjetsNotesEtudiants`
--

CREATE TABLE `ProjetsNotesEtudiants` (
  `ID` int(11) NOT NULL,
  `Etudiant` varchar(255) NOT NULL,
  `Matieres` varchar(255) NOT NULL,
  `Notes` int(11) NOT NULL,
  `Commentaires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ProjetsNotesGroupe`
--

CREATE TABLE `ProjetsNotesGroupe` (
  `ID` int(11) NOT NULL,
  `Groupe` varchar(255) NOT NULL,
  `Matieres` varchar(255) NOT NULL,
  `Notes` int(11) NOT NULL,
  `Commentaires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `DateAjoute` datetime NOT NULL,
  `DateFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SemiSudo`
--

CREATE TABLE `SemiSudo` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Connected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Sudo`
--

CREATE TABLE `Sudo` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Passwords` varchar(255) NOT NULL,
  `Connected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Sudo`
--

INSERT INTO `Sudo` (`ID`, `Nom`, `Passwords`, `Connected`) VALUES
(1, 'Rabby', '#rootNaN2018', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Visiteurs`
--

CREATE TABLE `Visiteurs` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenoms` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Activite` varchar(255) NOT NULL,
  `Localisation` varchar(255) NOT NULL,
  `Connected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `BonusMalus`
--
ALTER TABLE `BonusMalus`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `CommentairesEtudiants`
--
ALTER TABLE `CommentairesEtudiants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `CommentairesGroupes`
--
ALTER TABLE `CommentairesGroupes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `EquipeA`
--
ALTER TABLE `EquipeA`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `EquipeZ`
--
ALTER TABLE `EquipeZ`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Etudiants`
--
ALTER TABLE `Etudiants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `EtudiantsNotes`
--
ALTER TABLE `EtudiantsNotes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Ex-Etudiants`
--
ALTER TABLE `Ex-Etudiants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Groupes`
--
ALTER TABLE `Groupes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `GroupesNotes`
--
ALTER TABLE `GroupesNotes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `LikeEtudiants`
--
ALTER TABLE `LikeEtudiants`
  ADD PRIMARY KEY (`Like`);

--
-- Index pour la table `LikeGroupes`
--
ALTER TABLE `LikeGroupes`
  ADD PRIMARY KEY (`Like`);

--
-- Index pour la table `Modules`
--
ALTER TABLE `Modules`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Projets`
--
ALTER TABLE `Projets`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ProjetsNotesEtudiants`
--
ALTER TABLE `ProjetsNotesEtudiants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `ProjetsNotesGroupe`
--
ALTER TABLE `ProjetsNotesGroupe`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `SemiSudo`
--
ALTER TABLE `SemiSudo`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Sudo`
--
ALTER TABLE `Sudo`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Visiteurs`
--
ALTER TABLE `Visiteurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `BonusMalus`
--
ALTER TABLE `BonusMalus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CommentairesEtudiants`
--
ALTER TABLE `CommentairesEtudiants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `CommentairesGroupes`
--
ALTER TABLE `CommentairesGroupes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EquipeA`
--
ALTER TABLE `EquipeA`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EquipeZ`
--
ALTER TABLE `EquipeZ`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Etudiants`
--
ALTER TABLE `Etudiants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `EtudiantsNotes`
--
ALTER TABLE `EtudiantsNotes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Ex-Etudiants`
--
ALTER TABLE `Ex-Etudiants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Groupes`
--
ALTER TABLE `Groupes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `GroupesNotes`
--
ALTER TABLE `GroupesNotes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `LikeEtudiants`
--
ALTER TABLE `LikeEtudiants`
  MODIFY `Like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `LikeGroupes`
--
ALTER TABLE `LikeGroupes`
  MODIFY `Like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Modules`
--
ALTER TABLE `Modules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Projets`
--
ALTER TABLE `Projets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ProjetsNotesEtudiants`
--
ALTER TABLE `ProjetsNotesEtudiants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ProjetsNotesGroupe`
--
ALTER TABLE `ProjetsNotesGroupe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `SemiSudo`
--
ALTER TABLE `SemiSudo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Sudo`
--
ALTER TABLE `Sudo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Visiteurs`
--
ALTER TABLE `Visiteurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
