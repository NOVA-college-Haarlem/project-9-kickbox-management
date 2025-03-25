# Kickboks School Management Systeem

## Project Overzicht
Dit Laravel project biedt een Kickboks School Management Systeem met drie bestaande modellen: Training, Lidmaatschapsplan en het standaard Laravel User model. Studenten moeten deze basis uitbreiden met individuele functies om hun Laravel-vaardigheden te tonen in CRUD-operaties, relaties, validatie, routing en middleware.

## Gebruikersverhalen

### 1. Lesrooster Planning

#### Als instructeur:
- Lesroosters maken en beheren
  - Lessen maken met datum, tijd en moeilijkheidsgraad
  - Instructeurs toewijzen aan specifieke lessen
  - Maximale capaciteit instellen voor elke les
  - Lessen markeren als terugkerend (wekelijks, maandelijks)

#### Als student:
- Lesrooster bekijken
  - Alle beschikbare lessen voor de week zien
  - Lessen filteren op type, niveau of instructeur
  - Lesdetails bekijken, inclusief duur en vereisten
  - Beschikbaarheid controleren

### 2. Studentenregistratie

#### Als schoolbeheerder:
- Studentenregistraties beheren
  - Nieuwe studenten registreren met contactgegevens
  - Lidmaatschapsplannen en betalingsstatus toewijzen
  - Studentinformatie en status bijwerken
  - Aanwezigheid en betalingsgeschiedenis bekijken

#### Als potentiële student:
- Inschrijven voor kickbokslessen
  - Online registratieformulier invullen
  - Lidmaatschapsplan selecteren
  - Vereiste vrijwaringen en medische informatie indienen
  - Registratiebevestiging ontvangen

### 3. Aanwezigheidsregistratie

#### Als instructeur:
- Aanwezigheid bijhouden
  - Studenten markeren als aanwezig, te laat of afwezig
  - Aanwezigheidsgeschiedenis bekijken voor een specifieke les
  - Studenten identificeren met onregelmatige aanwezigheid
  - Aanwezigheidsrapporten genereren voor de eigenaar

#### Als student:
- Aanwezigheidsregistratie bekijken
  - Zien welke lessen zijn bijgewoond
  - Aanwezigheidspercentage bekijken
  - Aanwezigheidsreeksen en mijlpalen zien
  - Meldingen ontvangen over gemiste lessen

### 4. Voortgangsbewaking

#### Als instructeur:
- Studentvoortgang registreren
  - Beoordelingen maken voor verschillende vaardigheden en technieken
  - Voortgangsnotities bijhouden voor individuele studenten
  - Band/rang-vorderingen bijhouden
  - Gebieden identificeren waar studenten verbetering nodig hebben

#### Als student:
- Voortgang bekijken
  - Huidig vaardigheidsniveau en rang zien
  - Feedback van instructeur en beoordelingsresultaten bekijken
  - Verbetering in specifieke technieken volgen
  - Persoonlijke trainingsdoelen stellen

### 5. Lidmaatschapsbeheer

#### Als schoolbeheerder:
- Lidmaatschapsplannen beheren
  - Verschillende lidmaatschapsniveaus maken (beginner, gevorderd, onbeperkt)
  - Prijzen en duur instellen voor elk plan
  - Kortingen of promotietarieven toepassen
  - Actieve en verlopen lidmaatschappen bijhouden

#### Als student:
- Lidmaatschap beheren
  - Huidige lidmaatschapsdetails en vervaldatum bekijken
  - Lidmaatschap verlengen of upgraden
  - Betalingsgeschiedenis en aankomende kosten bekijken
  - Lidmaatschap indien nodig pauzeren

### 6. Betalingsverwerking

#### Als schoolbeheerder:
- Betalingen verwerken
  - Studenten betalen voor lidmaatschappen en speciale lessen
  - Recurring facturering instellen voor lidmaatschappen
  - Betalingsstatus en geschiedenis bijhouden
  - Refunds uitgeven wanneer nodig

#### Als student:
- Betalen
  - Lidmaatschapbetalingen online doen
  - Recurring betalingen instellen
  - Betalingsmethode bijwerken
  - Ontvangen betalingsbewijzen

### 7. Uitrustingsinventaris

#### Als uitrustingsmanager:
- Inventaris bijhouden
  - Inventarisitems toevoegen en categoriseren (handschoenen, pads, etc.)
  - Hoeveelheden bijwerken en voorwaarden
  - Uitrustingsleningen aan studenten bijhouden
  - Laag voorraadwaarschuwingen instellen voor essentiële items

#### Als student:
- Uitrustingsleningen aanvragen of kopen
  - Beschikbare uitrusting voor lening of aankoop bekijken
  - Verzoek om schooluitrusting te lenen
  - Persoonlijke uitrusting kopen via de school
  - Uitrusting terugbrengen en geschiedenis bijhouden

### 8. Wedstrijdbeheer

#### Als coach:
- Wedstrijdteambeheer
  - Wedstrijden maken en bijhouden
  - Studenten registreren voor specifieke evenementen
  - Weeg-ininformatie en wedstrijdvereisten vastleggen
  - Wedstrijdresultaten en prestaties documenteren

#### Als student:
- Deelnemen aan wedstrijden
  - Wedstrijden bekijken die aankomend zijn
  - Interesse aangeven om deel te nemen
  - Wedstrijdgeschiedenis en resultaten bekijken
  - Voorbereidingsinstructies ontvangen voor evenementen

### 9. Instructorschedule

#### Als schooleigenaar:
- Instructorschedule beheren
  - Instructeurs toewijzen aan specifieke lessen
  - Instructeurbeschikbaarheid en kwalificaties bekijken
  - Substituties indien nodig beheren
  - Instructeururen voor loonberekening bijhouden

#### Als instructeur:
- Les- en lesbeheer bekijken
  - Zien welke lessen ik ben gepland om te leren
  - Verzoek om vrije tijd of schemawijzigingen
  - Beschikbaarheid voor substitutie-mogelijkheden markeren
  - Privélesafspraken vastleggen

### 10. Vaardigheidscurriculum

#### Als hoofdinstructeur:
- Vaardigheidscurriculum definiëren
  - Curriculummodules maken voor verschillende bandniveaus
  - Specificeer vereiste technieken voor elk niveau
  - Curriculuminhoud indien nodig bijwerken
  - Instructeursautorisatie toewijzen om specifieke niveaus te leren

#### Als student:
- Vaardigheidscurriculum bekijken
  - Zien welke vaardigheden nodig zijn voor het huidige niveau
  - Voortgang door het curriculum volgen
  - Instructie-inhoud voor technieken bekijken
  - Zien wat er nodig is voor de volgende bandpromotie

### 11. Privélesboeking

#### Als instructeur:
- Privélesboeking beheren
  - Beschikbaarheid voor privélessen instellen
  - Privélesaanvragen goedkeuren of afwijzen
  - Privélesschema vastleggen
  - Privésessie-notities vastleggen

#### Als student:
- Privélessen boeken
  - Instructeurbeschikbaarheid voor privélessen bekijken
  - Verzoek privélessen te boeken op voorkeursmomenten
  - Focusgebieden voor les specificeren
  - Privélessen in de toekomstige en verleden bekijken

### 12. Bandtesten

#### Als instructeur:
- Bandtesten beheren
  - Bandtestevenementen plannen
  - Specificeer testvereisten en inschrijvingsvereisten
  - Testresultaten en feedback vastleggen
  - Voortgang van studenten door rangen bijhouden

#### Als student:
- Deelnemen aan bandtesten
  - Upcoming testdata bekijken
  - Registreren voor tests wanneer geschikt
  - Zien wat er nodig is voor de volgende rang
  - Voortgang en resultaten van testgeschiedenis bekijken

### 13. Fysieke Evaluatie

#### Als fitnesscoach:
- Fysieke evaluaties uitvoeren
  - Baseline fysieke metingen vastleggen
  - Key Performance Indicators (KPI's) bijhouden (kracht, flexibiliteit, conditie)
  - Periodieke herbeoordelingen plannen
  - Voortgangsrapporten voor studenten genereren

#### Als student:
- Fysieke evaluatieresultaten bekijken
  - Huidige fysieke metrische zien
  - Veranderingen in fysieke prestaties over tijd bekijken
  - Persoonlijke aanbevelingen bekijken
  - Fitnessdoelen stellen op basis van evaluatie

### 14. Schaderegistratie

#### Als instructeur:
- Schadegevallen bijhouden
  - Schadegevallen vastleggen en details
  - Medische beperkingen vastleggen voor geraakte studenten
  - Herstellingsvoortgang bijhouden
  - Trainingplannen aanpassen om schade te verhelpen

#### Als student:
- Schade melden en bijhouden
  - Schadegevallen melden die zijn opgetreden tijdens of buiten training
  - Herstellingsstatus bijwerken
  - Gewijzigde trainingsaanbevelingen ontvangen
  - Medische goedkeuringdocumenten delen

### 15. Voedingsadvies

#### Als voedingscoach:
- Voedingsadvies geven
  - Voedingsplannen maken voor verschillende trainingsdoelen
  - Voedingsplannen toewijzen aan individuele studenten
  - Voedingscompliance en resultaten bijhouden
  - Aanbevelingen indien nodig aanpassen op feedback

#### Als student:
- Voedingsadvies ontvangen
  - Aanbevolen voedingsplannen bekijken
  - Voedingsintake voor coachcontrole vastleggen
  - Gewicht en lichaamscompositie bijhouden
  - Vragen stellen over voedingskeuzes

### 16. Evenementenbeheer

#### Als schoolbeheerder:
- Speciale evenementen organiseren
  - Speciale workshops of seminars plannen en organiseren
  - Gastinstructorenoptredens beheren
  - Registratie en aanwezigheid voor evenementen bijhouden
  - Feedback na evenementen verzamelen

#### Als student:
- Deelnemen aan speciale evenementen
  - Upcoming speciale evenementen bekijken
  - Registreren en betalen voor evenementen
  - Evenementdetails en voorbereidingsinstructies ontvangen
  - Feedback geven na deelname

### 17. Communicatiesysteem

#### Als schoolbeheerder:
- Aankondigingen maken
  - Berichten maken en verzenden naar specifieke groepen of alle leden
  - Aankondigingen plannen voor toekomstige levering
  - Templates gebruiken voor algemene communicaties
  - Levering en interactie bijhouden

#### Als student:
- Schoolcommunicaties ontvangen
  - Aankondigingen ontvangen via e-mail of in-app meldingen
  - Communicatievoorkeuren beheren
  - Archief van vorige aankondigingen toegang geven
  - Reacties geven wanneer nodig

### 18. Trainingresources

#### Als instructeur:
- Trainingresources delen
  - Video's delen die goede technieken demonstreren
  - Trainingdocumenten en handleidingen delen
  - Resources organiseren door bandniveau of vaardigheidssoort
  - Zien welke studenten resources hebben toegang

#### Als student:
- Trainingresources bekijken
  - Bibliotheek van trainingvideo's en documenten bekijken
  - Zoeken naar specifieke technieken of vaardigheden
  - Favoriete resources vastleggen voor gemakkelijk toegang
  - Voortgang door aanbevolen materialen volgen

### 19. Prestatieanalyse

#### Als hoofdcoach:
- Prestatiegegevensanalyseren
  - Aggregate gegevens bekijken op studentvoortgang
  - Algemene moeilijkheidsgebieden identificeren
  - Prestaties door verschillende trainingsgroepen vergelijken
  - Gegevens gebruiken om curriculumaanpassingen te informeren

#### Als student:
- Prestatieanalyse bekijken
  - Visualisaties van trainingsgegevens bekijken
  - Algemene en minst ontwikkelde vaardigheden identificeren
  - Voortgang vergelijken met anonimiseerde peergegevens
  - AI-gegenereerde trainingsaanbevelingen ontvangen

### 20. Gemeenschapsopbouw

#### Als schooleigenaar:
- Gemeenschapsbetrokkenheid bevorderen
  - Studentenprofielen maken die zichtbaar zijn binnen de gemeenschap
  - Prestaties en mijlpalen van studenten uitlichten
  - Communicatie tussen leden faciliteren
  - Sociale evenementen en teambuilding-activiteiten organiseren

#### Als student:
- Verbinden met schoolgemeenschap
  - Gemeenschapsprofiel maken en aanpassen
  - Interactie met andere studenten via forums of chat
  - Prestaties van medestudenten erkennen en feliciteren
  - Deelnemen aan gemeenschapsuitdagingen en evenementen

