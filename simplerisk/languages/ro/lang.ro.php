<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Acasă',
    'RiskManagement'=>'Managementul Riscului',
    'Reporting'=>'De raportare',
    'Configure'=>'Configurați',
    'MyProfile'=>'Profilul Meu',
    'Logout'=>'Logout',
    'LogInHere'=>'Conectați-Vă Aici',
    'Username'=>'Numele de utilizator',
    'Password'=>'Parola',
    'ForgotYourPassword'=>'Ți-ai uitat parola',
    'Login'=>'Login',
    'Reset'=>'Resetare',
    'Send'=>'Trimite',
    'Update'=>'Update',
    'SendPasswordResetEmail'=>'Trimite E-Mail De Resetare A Parolei',
    'PasswordReset'=>'Resetare A Parolei',
    'ResetToken'=>'Simbolul De Reinițializare',
    'RepeatPassword'=>'Repetați Parola',
    'Submit'=>'Trimite',
    'ProfileDetails'=>'Detalii Profil',
    'LastLogin'=>'Ultima Logare',
    'ChangePassword'=>'Schimba Parola',
    'CurrentPassword'=>'Parola Curentă',
    'NewPassword'=>'Noua Parola',
    'ConfirmPassword'=>'Confirma Parola',
    'ConfigureRiskFormula'=>'Configurați Risc Formula',
    'ConfigureReviewSettings'=>'Configurați Setările De Revizuire',
    'AddAndRemoveValues'=>'Adăuga și Elimina Valorile',
    'UserManagement'=>'Management De Utilizator',
    'RedefineNamingConventions'=>'Redefini Convențiile De Denumire',
    'AuditTrail'=>'Pistă De Audit',
    'Extras'=>'Extras',
    'Announcements'=>'Anunțuri',
    'About'=>'Despre',
    'Impact'=>'Impactul',
    'Likelihood'=>'Probabilitatea',
    'MitigationEffort'=>'Efort De Atenuare',
    'Change'=>'Schimba',
    'to'=>'pentru a',
    'AddANewUser'=>'Adăugați un Utilizator Nou',
    'Type'=>'Tip',
    'FullName'=>'Numele Complet',
    'EmailAddress'=>'E-mail',
    'Teams'=>'Echipa(e)',
    'ALL'=>'TOATE',
    'NONE'=>'NICI unul',
    'UserResponsibilities'=>'Responsabilitățile Utilizatorului',
    'AbleToSubmitNewRisks'=>'În măsură să Prezinte Riscuri Noi',
    'AbleToModifyExistingRisks'=>'Capabil de a Modifica Riscurile Existente',
    'AbleToCloseRisks'=>'Capabil să funcționeze Riscuri',
    'AbleToPlanMitigations'=>'Capabil să-și Planifice Mitigations',
    'AbleToReviewLowRisks'=>'Capabil de a Revizui Riscuri Scăzute',
    'AbleToReviewMediumRisks'=>'Capabil de a Revizui Mediu Riscuri',
    'AbleToReviewHighRisks'=>'Capabil de a Revizui Riscuri Ridicate',
    'AllowAccessToConfigureMenu'=>'Permite Accesul la "Configure" Meniu',
    'MultiFactorAuthentication'=>'Multi-Factor Authentication',
    'None'=>'Nici unul',
    'Add'=>'Adauga',
    'ViewDetailsForUser'=>'Vezi Detalii pentru Utilizator',
    'DetailsForUser'=>'Detalii pentru Utilizator',
    'Select'=>'Selectați',
    'EnableAndDisableUsers'=>'Activa și Dezactiva Utilizatori',
    'EnableAndDisableUsersHelp'=>'Utilizați această caracteristică pentru a activa sau dezactiva datele de conectare de utilizator menținând în același timp o pistă de audit activitățile de utilizator',
    'DisableUser'=>'Dezactivarea utilizatorului',
    'Disable'=>'Dezactivați',
    'EnableUser'=>'Permite utilizatorului',
    'Enable'=>'Permite',
    'DeleteAnExistingUser'=>'Șterge un Utilizator Existent',
    'DeleteCurrentUser'=>'Șterge utilizatorul curent',
    'Delete'=>'Șterge',
    'SendPasswordResetEmailForUser'=>'Trimite email de resetare a parolei pentru utilizatorul',
    'Category'=>'Categorie',
    'AddNewCategoryNamed'=>'Adauga o noua categorie pe nume',
    'DeleteCurrentCategoryNamed'=>'Delete current categorie de nume',
    'Team'=>'Echipa',
    'AddNewTeamNamed'=>'Adăuga noi nume echipa',
    'DeleteCurrentTeamNamed'=>'Șterge actuala echipa de nume',
    'Technology'=>'Tehnologia',
    'AddNewTechnologyNamed'=>'Adaugă nouă tehnologie numită',
    'DeleteCurrentTechnologyNamed'=>'Șterge tehnologia actuală numit',
    'SiteLocation'=>'Site-Ul/Locație',
    'AddNewSiteLocationNamed'=>'Adăugați noi site/nume locație',
    'DeleteCurrentSiteLocationNamed'=>'Șterge-ul curent/nume locație',
    'ControlRegulation'=>'Regulament De Control',
    'AddNewControlRegulationNamed'=>'Adăugați noul regulament de control numit',
    'DeleteCurrentControlRegulationNamed'=>'Șterge actualul regulament de control numit',
    'RiskPlanningStrategy'=>'Risc Strategia De Planificare',
    'AddNewRiskPlanningStrategyNamed'=>'Adăuga noi riscului strategia de planificare nume',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Șterge risc actual de planificare a strategiei de nume',
    'CloseReason'=>'Aproape Motiv',
    'AddNewCloseReasonNamed'=>'Adaugă aproape nou motiv numit',
    'DeleteCurrentCloseReasonNamed'=>'Șterge curent aproape, motiv numit',
    'IWantToReviewHighRiskEvery'=>'Vreau să revizuiască risc RIDICAT de fiecare',
    'IWantToReviewMediumRiskEvery'=>'Vreau să revizuiască risc MEDIU fiecare',
    'IWantToReviewLowRiskEvery'=>'Vreau să revizuiască risc SCĂZUT de fiecare',
    'days'=>'zile',
    'MyClassicRiskFormulaIs'=>'Meu Clasic De Risc Formula Este',
    'RISK'=>'RISC',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Consider risc RIDICAT de a fi ceva mai mare decât',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Consider risc MEDIU să fie mai mică decât cele de mai sus, dar mai mare decât',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Consider risc SCĂZUT de a fi mai puțin decât cele mai sus menționate, dar mai mare decât',
    'HighRisk'=>'Risc Ridicat',
    'MediumRisk'=>'Risc Mediu',
    'LowRisk'=>'Risc Scăzut',
    'Irrelevant'=>'Irelevant',
    'SubmitYourRisks'=>'Prezinte Riscuri',
    'PlanYourMitigations'=>'Planul De Atenuare',
    'PerformManagementReviews'=>'Efectua Analizele De Management',
    'PrioritizeForProjectPlanning'=>'Prioritate pentru Planificarea Proiectului',
    'ReviewRisksRegularly'=>'Revizuirea Riscurilor Cu Regularitate',
    'DocumentANewRisk'=>'Document un Nou Risc',
    'UseThisFormHelp'=>'Folosiți acest formular pentru a documenta un nou risc de luat în considerare în Procesul de Management al Riscului',
    'Subject'=>'Subiect',
    'ExternalReferenceId'=>'Extern ID-ul de Referință',
    'ControlNumber'=>'Numărul De Control',
    'Owner'=>'Proprietar',
    'OwnersManager'=>'Proprietarului Manager',
    'RiskScoringMethod'=>'Risc Metoda De Scoring',
    'CurrentLikelihood'=>'Curent Probabilitatea',
    'CurrentImpact'=>'Impactul Actual',
    'RiskAssessment'=>'Evaluarea Riscurilor',
    'AdditionalNotes'=>'Note Suplimentare',
    'UNREVIEWED'=>'UNREVIEWED',
    'PASTDUE'=>'TRECUT DIN CAUZA',
    'ID'=>'ID',
    'Status'=>'Starea',
    'Risk'=>'Risc',
    'DaysOpen'=>'Zile Deschise',
    'CalculatedRisk'=>'Risc Calculat',
    'SubmittedBy'=>'Prezentat De',
    'NextReviewDate'=>'Următoarea Dată De Revizuire',
    'CVSSRiskScoring'=>'CVSS de Notare a Riscului',
    'DREADRiskScoring'=>'TEAMA de Notare a Riscului',
    'OWASPRiskScoring'=>'OWASP de Notare a Riscului',
    'CustomRiskScoring'=>'Personalizate De Notare A Riscului',
    'MitigationPlanningHelp'=>'Mai jos este lista prezentată riscuri care necesită atenuarea planificare',
    'ManagementReviewHelp'=>'Mai jos este lista prezentată riscuri care necesită un management review',
    'Submitted'=>'Prezentat',
    'MitigationPlanned'=>'De Atenuare Planificate',
    'ManagementReview'=>'Analiza De Management',
    'No'=>'Nu',
    'Yes'=>'Da',
    'AddAndRemoveProjects'=>'Adăuga și Elimina Proiecte',
    'AddAndRemoveProjectsHelp'=>'Adăuga și elimina proiecte, în scopul de a asocia mai multe riscuri pentru prioritizarea',
    'AddNewProjectNamed'=>'Adaugă nou proiect numit',
    'DeleteCurrentProjectNamed'=>'Șterge actualul proiect numit',
    'AddUnassignedRisksToProjects'=>'Adaugă Neatribuite Riscuri pentru Proiecte',
    'AddUnassignedRisksToProjectsHelp'=>'Drag and drop neatribuite riscurile marcate cu titlu oneros ca un proiect în proiect corespunzător tab',
    'PrioritizeProjects'=>'Prioritizarea Proiectelor',
    'PrioritizeProjectsHelp'=>'Muta proiecte în jurul și de a schimba ordinea de prioritizare. După ce ați terminat, nu uitați să apăsați butonul "Update" pentru a salva modificările',
    'SaveRisksToProjects'=>'Salva Riscuri pentru Proiecte',
    'RiskId'=>'Riscul de IDENTITATE',
    'RiskActions'=>'Riscul Acțiuni',
    'ReopenRisk'=>'Redeschide Risc',
    'CloseRisk'=>'Aproape Risc',
    'EditRisk'=>'Edit Risc',
    'PlanAMitigation'=>'Planul de Atenuare',
    'PerformAReview'=>'De a efectua o Revizuire',
    'AddAComment'=>'Adauga un Comentariu',
    'ShowRiskScoringDetails'=>'Spectacol De Notare A Riscului Detalii',
    'HideRiskScoringDetails'=>'Ascunde De Notare A Riscului Detalii',
    'Details'=>'Detalii',
    'SubmissionDate'=>'Data Depunerii',
    'DateSubmitted'=>'Data Prezentării',
    'EditDetails'=>'Editare Detalii',
    'Mitigation'=>'De atenuare',
    'MitigationDate'=>'Atenuare Data',
    'PlanningStrategy'=>'Strategia De Planificare',
    'CurrentSolution'=>'Soluția De Curent',
    'SecurityRequirements'=>'Cerințe De Securitate',
    'SecurityRecommendations'=>'Recomandări De Securitate',
    'EditMitigation'=>'Edit Atenuare',
    'LastReview'=>'Ultima Revizuire',
    'ReviewDate'=>'Revizuire Data',
    'Reviewer'=>'Referent',
    'Review'=>'Review',
    'NextStep'=>'Următorul Pas',
    'Comments'=>'Comentarii',
    'ViewAllReviews'=>'Vezi Toate Impresiile',
    'ReviewHistory'=>'Revista De Istorie',
    'Comment'=>'Comentariu',
    'ClassicRiskScoring'=>'Clasic De Notare A Riscului',
    'RiskScoringActions'=>'De Notare A Riscului De Acțiuni',
    'UpdateClassicScore'=>'Update Clasic Scor',
    'ScoreBy'=>'Scorul de',
    'RISKClassicExp1'=>'RISC = ( Probabilitate x Impact + 2(Impact) )',
    'RISKClassicExp2'=>'RISC = ( Probabilitate x Impact + Impact )',
    'RISKClassicExp3'=>'RISC = ( Probabilitate x Impact )',
    'RISKClassicExp4'=>'RISC = ( Probabilitate x Impact + Probabilitatea )',
    'RISKClassicExp5'=>'RISC = ( Probabilitate x Impact + 2(Probabilitatea) )',
    'Reason'=>'Motiv',
    'CloseOutInformation'=>'Close-Out Informații',
    'SubmitManagementReview'=>'Prezenta Analiza De Management',
    'SubmitRiskMitigation'=>'Prezintă Risc De Diminuare A',
    'RiskDashboard'=>'Riscul De Bord',
    'RiskTrend'=>'Riscul Trend',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Deschide toate Riscurile Atribuite la Mine de Nivelul de Risc',
    'AllOpenRisksByRiskLevel'=>'Deschide toate Riscurile de Nivelul de Risc',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Deschide toate Riscurile luate în Considerare pentru Proiectele de Nivelul de Risc',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Deschide toate Riscurile Acceptate Până la Următoarea Revizuire de Nivelul de Risc',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Deschide toate Riscurile să se Prezinte ca o Problemă de Producție cu Nivel de Risc',
    'AllOpenRisksByScoringMethod'=>'Deschide toate Riscurile de Metoda de Scoring',
    'AllClosedRisksByRiskLevel'=>'Închise toate Riscurile de Nivelul de Risc',
    'SubmittedRisksByDate'=>'Prezentat Riscurile De Data',
    'MitigationsByDate'=>'Atenuare De Data',
    'ManagementReviewsByDate'=>'Analizele De Management De Data',
    'ProjectsAndRisksAssigned'=>'Proiecte și Riscurile Atribuite',
    'OpenRisks'=>'Deschide Riscuri',
    'ClosedRisks'=>'Închis Riscuri',
    'ReportMyOpenHelp'=>'Acest raport arată deschise toate riscurile care utilizatorul curent ca proprietarul sau administratorul asociat cu riscul comandate de nivelul de risc',
    'ReportOpenHelp'=>'Acest raport arată deschise toate riscurile comandate de nivelul de risc',
    'ReportProjectsHelp'=>'Acest raport arată deschise toate riscurile luate în considerare pentru proiecte comandate de nivelul de risc',
    'ReportNextReviewHelp'=>'Acest raport arată deschise toate riscurile acceptate până la următoarea revizuire a ordonat de nivelul de risc',
    'ReportProductionIssuesHelp'=>'Acest raport arată deschise toate riscurile prezentate ca probleme de producție comandate de nivelul de risc',
    'ReportRiskScoringHelp'=>'Acest raport arată toate de notare a riscului de metode și riscurile marcat folosind fiecare',
    'ReportClosedHelp'=>'Acest raport arată închise toate riscurile comandate de nivelul de risc',
    'ReportSubmittedByDateHelp'=>'Acest raport prezinta toate riscurile comandat de la data depunerii',
    'ReportMitigationsByDateHelp'=>'Acest raport arată toate atenuare planificate comandat de atenuare data',
    'ReportMgmtReviewsByDateHelp'=>'Acest raport arată toate analizele de management comandat de revizuire data',
    'ReportProjectsAndRisksHelp'=>'Acest raport arată toate proiectele și riscurile care le sunt atribuite',
    'Language'=>'Limba',
    'AllOpenRisksNeedingReview'=>'Deschide toate Riscurile Nevoie de o Revizuire',
    'ReportReviewNeededHelp'=>'Acest raport arată deschise toate riscurile nevoie de un management review',
    'CustomValue'=>'Valoare În Vamă',
    'ClosedRisksByDate'=>'Închis Riscurile De Data',
    'DateClosed'=>'Data Închise',
    'ClosedBy'=>'Închis De',
    'ReportClosedByDateHelp'=>'Acest raport prezinta toate riscurile comandat de data închiderii',
    'AllOpenRisksByTeam'=>'Deschide toate Riscurile de Echipa',
    'ReportRiskTeamsHelp'=>'Acest raport arată toate echipele și riscurile asociate pentru fiecare',
    'Unassigned'=>'Neatribuite',
    'AllOpenRisksByTechnology'=>'Deschide Toate Riscurile De Tehnologie',
    'ReportRiskTechnologiesHelp'=>'Acest raport arată toate tehnologiile și riscurile asociate pentru fiecare',
    'RiskLevel'=>'Nivelul De Risc',
    'BasedOnTheCurrentRiskScore'=>'Bazat pe actualul scor de risc, următoarea dată de revizuire va fi ',
    'WouldYouLikeToUseADifferentDate'=>'Doriți să utilizați o altă dată?',
    'RisksOpenedAndClosedOverTime'=>'Riscurile Deschise și Închise de-a Lungul Timpului',
    'AllRiskScoresAreAdjusted'=>'Toate scoruri de risc sunt ajustate pentru a se potrivi pe o scala 0-10.',
    'DetermineProjectStatus'=>'Determina Starea De Proiect',
    'ProjectStatusHelp'=>'Locul proiecte în găleți bazat pe statutul lor actual.',
    'ActiveProjects'=>'Proiecte Active',
    'OnHoldProjects'=>'În Așteptare Proiecte',
    'CompletedProjects'=>'Proiecte Finalizate',
    'CancelledProjects'=>'Anulate Proiecte',
    'UpdateProjectStatuses'=>'Proiectul De Actualizare Statusuri',
    'HighRiskReport'=>'Risc Ridicat Raport',
    'TotalOpenRisks'=>'Total Deschide Riscuri',
    'TotalHighRisks'=>'Total Riscuri Ridicate',
    'HighRiskPercentage'=>'Risc Ridicat Procent',
    'UpdateClassicScore'=>'Update Clasic Scor',
    'CurrentLikelihood'=>'Curent Probabilitatea',
    'CurrentImpact'=>'Impactul Actual',   
    'UpdateCVSSScore'=>'Update CVSS Scor',
    'BaseScoreMetrics'=>'Scorul De Bază Valori',
    'AttackVector'=>'Vector De Atac',
    'AttackComplexity'=>'Atac Complexitate',
    'Authentication'=>'Autentificare',
    'ConfidentialityImpact'=>'Confidențialitatea Impact',
    'IntegrityImpact'=>'Integritatea Impact',
    'AvailabilityImpact'=>'Disponibilitatea De Impact',
    'TemporalScoreMetrics'=>'Temporal Scorul De Valori',
    'Exploitability'=>'Exploatabilitate',
    'RemediationLevel'=>'Remedierea Nivel',
    'ReportConfidence'=>'Raport De Încredere',
    'EnvironmentalScoreMetrics'=>'Mediu Scor Valori',
    'CollateralDamagePotential'=>'Daune Colaterale Potențial',
    'TargetDistribution'=>'Țintă De Distribuție',
    'ConfidentialityRequirement'=>'Cerința De Confidențialitate',
    'IntegrityRequirement'=>'Integritatea Cerință',
    'AvailabilityRequirement'=>'Disponibilitatea Cerință',
    'UpdateDREADScore'=>'Update GROAZĂ Scor',
    'DamagePotential'=>'Potențialul De Daune',
    'Reproducibility'=>'Reproductibilitate',
    'AffectedUsers'=>'Utilizatorii Afectați',
    'Discoverability'=>'Detectabilitatea',
    'UpdateOWASPScore'=>'Update OWASP Scor',
    'ThreatAgentFactors'=>'Amenințare Agent Factori',
    'SkillLevel'=>'Nivelul De Calificare',
    'Motive'=>'Motiv',
    'Opportunity'=>'Posibilitatea de',
    'Size'=>'Dimensiune',
    'VulnerabilityFactors'=>'Factori De Vulnerabilitate',
    'EaseOfDiscovery'=>'Ușurința de Descoperire',
    'EaseOfExploit'=>'Ușurința de a Exploata',
    'Awareness'=>'Conștientizarea',
    'IntrusionDetection'=>'De Detectare A Intruziunilor',
    'TechnicalImpact'=>'Impactul Tehnic',
    'LossOfConfidentiality'=>'Pierderea de Confidențialitate',
    'LossOfIntegrity'=>'Pierderea Integrității',
    'LossOfAvailability'=>'Pierderea de Disponibilitate',
    'LossOfAccountability'=>'Pierderea de Responsabilitate',
    'BusinessImpact'=>'Impactul Asupra Afacerii',
    'FinancialDamage'=>'Daune Financiare',
    'ReputationDamage'=>'Daune Reputației',
    'NonCompliance'=>'Non-Conformitatea',
    'PrivacyViolation'=>'Încălcare A Confidențialității',
    'UpdateCustomScore'=>'Actualizare Scor Personalizate',
    'ManuallyEnteredValue'=>'Manual Intrat Valoare',
    'ScoreByClassic'=>'Scorul de Clasic',
    'ScoreByCVSS'=>'Scorul de CVSS',
    'ScoreByDREAD'=>'Scorul de GROAZĂ',
    'ScoreByOWASP'=>'Scorul de OWASP',
    'ScoreByCustom'=>'Scorul de Personalizat',
    'BaseVector'=>'Baza De Vector',
    'TemporalVector'=>'Vectorul Temporal',
    'EnvironmentalVector'=>'Mediu Vector',
    'SupportingDocumentation'=>'Documente Justificative',
    'Import'=>'Import',
    'Export'=>'Export',
    'ActivateTheImportExportExtra'=>'Activa Import/Export Suplimentar',
    'PrintableView'=>'Tipărit Vedere',
    'GroupBy'=>'Grup De',
    'IncludedColumns'=>'Incluse Coloane',
    'AllRisks'=>'Toate Riscurile',
    'DynamicRiskReport'=>'Dinamic Raportul De Risc',
    'ObsoleteReports'=>'Învechit Rapoarte',
    'Project'=>'Proiect',
    'SortBy'=>'Un Fel De',
    'MonthSubmitted'=>'Luna Prezentate',
    'AssetManagement'=>'De Gestionare A Activelor',
    'AutomatedDiscovery'=>'Descoperire Automată',
    'BatchImport'=>'Lot De Import',
    'ManageAssets'=>'Gestionarea De Active',
    'AssetValuation'=>'De Evaluare A Activelor',
    'AllowAccessToAssetManagementMenu'=>'Permite Accesul la "Asset Management" Meniu',
    'AutomatedDiscoveryHelp'=>'Descoperiți toate live adrese IP in IP introduse gama. Live adrese IP vor fi adăugate la lista de inventar. Formatele acceptate:',
    'IPRange'=>'Gama de IP',
    'Search'=>'Căutare',
    'AddANewAsset'=>'Adauga un Nou Activ',
    'DeleteAnExistingAsset'=>'Ștergerea unui Activ Existent',
    'AssetName'=>'Denumirea Bunului',
    'IPAddress'=>'Adresa IP',
    'AssetWasAddedSuccessfully'=>'Activul a fost adăugat cu succes.',
    'AssetWasDeletedSuccessfully'=>'Activ a fost șters cu succes.',
    'ThereWasAProblemAddingTheAsset'=>'Nu a fost o problemă la adăugarea activului.',
    'ThereWasAProblemDeletingTheAsset'=>'Nu a fost o problemă ștergerea activului.',
    'ComingSoon'=>'În Curând',
    'ExportRisks'=>'Export Riscuri',
    'ExportMitigations'=>'Export Mitigations',
    'ExportReviews'=>'Export Recenzii',
    'ExportCombined'=>'Export Combinate',
    'MitigatedBy'=>'Atenuate De',
    'MitigationId'=>'Atenuare ID',
    'ReviewId'=>'Revizuire ID-ul',
    'AffectedAssets'=>'Activele Afectate',
    'Activate'=>'Activa',
    'DeleteRisks'=>'Șterge Riscuri',
    'DeletedRisksCannotBeRecovered'=>'Elimină Riscurile Nu Pot Fi Recuperate',
    'RisksDeletedSuccessfully'=>'Riscul(riscurile) Șters cu Succes',
    'ThereWasAProblemDeletingTheRisk'=>'Nu a Fost o Problemă Ștergerea Riscului(riscurilor)',
    'Activated'=>'ACTIVAT',
    'IWantToReviewInsignificantRiskEvery'=>'Vreau să revizuiască risc NESEMNIFICATIV de fiecare',
    'Insignificant'=>'Nesemnificativ',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Consider risc FOARTE RIDICAT de a fi ceva mai mare decât',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Consider risc RIDICAT de a fi mai puțin decât cele mai sus menționate, dar mai mare decât',
    'VeryHigh'=>'Foarte Mare',
    'VeryHighRisk'=>'Risc Foarte Ridicat',
    'IWantToReviewVeryHighRiskEvery'=> 'Vreau să revizuiască risc FOARTE RIDICAT de fiecare',
    'AbleToReviewVeryHighRisks'=>'Capabil de a Revizui Riscuri Foarte Mari',
    'AbleToReviewInsignificantRisks'=>'Capabil de a Revizui Riscuri Nesemnificative',
    'TotalVeryHighRisks'=>'Total Riscuri Foarte Mari',
    'VeryHighRiskPercentage'=>'Risc Foarte Ridicat Procent',
    'AllTeams'=>'Toate Echipele',
    'FileUploadSettings'=>'Fișier De Încărcare Setări',
    'AllowedFileTypes'=>'Tipuri De Fișiere Permise',
    'AddNewFileTypeOf'=>'Adaugă fișier nou tip de',
    'DeleteCurrentFileTypeOf'=>'Ștergeți fișierul curent tip de',
    'MaximumUploadFileSize'=>'Dimensiune Maximă Fișier De Încărcare',
    'Bytes'=>'Bytes',
    'CheckAll'=>'Verificați Toate',
    'CheckAllRiskMgmt'=>'Verificați Toate De Gestionare A Riscurilor',
    'CheckAllAssetMgmt'=>'Verificați Toate Asset Management',
    'CheckAllConfigure'=>'Verificați Toate Configura',
    'MitigationTeam'=>'Atenuare Echipa',
    'ImportRisks'=>'Import Riscuri',
    'ImportAssets'=>'Import Active',
    'AssetValue'=>'Valoarea Activului',
    'Register'=>'Registrul',
    'RegisterSimpleRisk'=>'Registrul SimpleRisk',
    'RegistrationText'=>'Prin înregistrarea SimpleRisk va fi furnizarea de informații de contact astfel încât să puteți fi la curent cu cele mai recente informații de presă și importante notificări de securitate. Informațiile dvs. nu vor fi vândute unei terțe părți. Înregistrat cazuri au, de asemenea, posibilitatea de a fi susținute și modernizate cu un clic pe un buton.',
    'RegistrationInformation'=>'Informațiile De Înregistrare',
    'Company'=>'Compania',
    'JobTitle'=>'Titlul De Locuri De Muncă',
    'Phone'=>'Telefon',
    'UpgradeSimpleRisk'=>'Upgrade SimpleRisk',
    'UpgradeInstructions'=>'Această secțiune folosește Upgrade-ul Suplimentar. Pentru a asigurați-vă că aveți cea mai recentă versiune, selectați "Update", re-înregistrare, și reîncărcați această pagină.',
    'NoUpgradeNeeded'=>'Nu de upgrade este necesar în acest moment.',
    'BackupDatabase'=>'Backup baza de Date',
    'UpgradeApplication'=>'Upgrade Cerere',
    'UpgradeDatabase'=>'Upgrade la baza de Date',
    'CustomExtras'=>'Personalizat Extra',
    'CustomExtrasText'=>'Ar fi minunat dacă totul a fost gratuit, nu? Sperăm că nucleul SimpleRisk platforma este capabil de a servi toate necesităților de gestionare a riscurilor. Dar, dacă vă aflați încă doresc mai multă funcționalitate, ne-am dezvoltat o serie de "Extra", care va face doar asta.',
    'Upgrade'=>'Upgrade',
    'Install'=>'Instalați',
    'Purchase'=>'Cumpărare',
    'PasswordPolicy'=>'Politica De Parole',
    'MinimumNumberOfCharacters'=>'Numărul minim de Caractere',
    'RequireAlphaCharacter'=>'Necesita Alfa Caracter',
    'RequireUpperCaseCharacter'=>'Necesita Literă',
    'RequireLowerCaseCharacter'=>'Necesită Litere Mici',
    'RequireNumericCharacter'=>'Necesita Caracter Numeric',
    'RequireSpecialCharacter'=>'Avea Nevoie De Caractere Speciale',
    'Enabled'=>'Activat',
    'RiskPyramid'=>'Riscul Piramida',
    'RiskPyramidDescription'=>'Riscul piramida de mai sus ajută să arate repartizarea riscurilor între diferitele niveluri de risc. Un top grele piramida poate fi un semn că organizația dumneavoastră este de a lua prea mult risc.',
    'RiskAdvice'=>'Sfaturi Risc',
    'AddDeleteAssets'=>'Adăuga Și Șterge Active',
    'EditAssets'=>'Edit Active',
    'AutomaticAssetValuation'=>'Automate De Evaluare A Activelor',
    'ManualAssetValuation'=>'Manual De Evaluare A Activelor',
    'MinimumValue'=>'Valoarea Minimă',
    'MaximumValue'=>'Valoarea Maximă',
    'ValueRange'=>'Gama De Valoare',
    'DefaultAssetValuation'=>'Implicit De Evaluare A Activelor',
    'Default'=>'Default',
    'RisksAndAssets'=>'Riscuri și Active',
    'Report'=>'Raportul',
    'RisksByAsset'=>'Riscurile de Activ',
    'AssetsByRisk'=>'Activele de Risc',
    'MaximumQuantitativeLoss'=>'Maxim Cantitative Pierdere',
    'MitigationOwner'=>'Atenuare Proprietar',
    'MitigationCost'=>'De Diminuare A Costurilor',
    'RiskColumns'=>'Riscul Coloane',
    'MitigationColumns'=>'Atenuare Coloane',
    'ReviewColumns'=>'Coloane De Atac',
    'ChangeStatus'=>'Schimba Status',
    'SetRiskStatusTo'=>'Setați Starea De Risc Pentru',
    'AddNewStatusNamed'=>'Adăugați noul statut nume',
    'DeleteStatusNamed'=>'Stare de ștergere nume',
    'DefaultCurrencySymbol'=>'Moneda Implicita Simbol',
    'DefaultValues'=>'Valorile Implicite',
    'RiskSource'=>'Riscul Sursa',
    'AddNewSourceNamed'=>'Adăugați o nouă sursă nume',
    'DeleteSourceNamed'=>'Delete source numit',
    'CheckAllAssessments'=>'Verificați Toate Evaluările',
    'AllowAccessToAssessmentsMenu'=>'Permite Accesul la "Evaluări" Meniu',
    'Assessments'=>'Evaluările',
    'AvailableAssessments'=>'Evaluările Disponibile',
    'PendingRisks'=>'În Așteptarea Riscuri',
    'CreateAssessment'=>'Crea Evaluare',
    'EditAssessment'=>'Edit Evaluare',
    'Overview'=>'Privire de ansamblu',
    'OpenVsClosed'=>'Deschide vs Închis',
    'MitigatedVsUnmitigated'=>'Atenuate vs fără cruțare',
    'ReviewedVsUnreviewed'=>'Revizuit vs Unreviewed',
    'OpenedRisks'=>'Deschis Riscuri',
    'MailSettings'=>'Setările De E-Mail',
    'TransportAgent'=>'Transport Agent',
    'FromName'=>'De La Numele',
    'FromEmail'=>'De La E-Mail',
    'ReplyToName'=>'Răspunsreferitorla Numele',
    'ReplyToEmail'=>'Răspunsreferitorla E-Mail',
    'Host'=>'Gazdă',
    'SMTPAuthentication'=>'Autentificare SMTP',
    'Encryption'=>'Criptare',
    'Port'=>'Port',
    'Next'=>'Următoarea',
    'NewAssessmentQuestion'=>'Evaluare Nouă Întrebare',
    'Question'=>'Întrebare',
    'RiskScore'=>'Scorul De Risc',
    'SubmitRisk'=>'Prezinte Risc',
    'Answer'=>'Răspunsul',
    'AddQuestion'=>'Adăugați Întrebare',
    'SaveAssessment'=>'Salva De Evaluare',
    'SendAssessment'=>'Trimite Evaluare',
    'DeleteAssessment'=>'Șterge Evaluare',
    'AssessmentName'=>'Evaluarea Numele',
    'SendTo'=>'Trimite',
    'ActiveAssessments'=>'Active Evaluări',
    'SentTo'=>'Trimis La',
    'From'=>'Din',
    'Key'=>'Cheie',
    ''=>'',
);

?>
