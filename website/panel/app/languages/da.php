<?php

return array(
  'title' => 'Dansk',
  'author' => 'Jimmy Rittenborg <jimmy@rittencom.dk>',
  'version' => '1.1.0',
  'data' => array(

    // global
    'cancel' => 'Annuller',
    'add' => 'Ny',
    'save' => 'Gem',
    'saved' => 'Gemt!',
    'delete' => 'Slet',
    'insert' => 'Indsæt',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Vis indstillinger',
    'options.hide' => 'Skjul indstillinger',

    // installation
    'installation' => 'Installation',
    'installation.check.headline' => 'Kirby Panel Installation',
    'installation.check.text' => 'Kirby stødte på følgende problemer under installationen…',
    'installation.check.retry' => 'Prøv igen',
    'installation.check.error' => 'Der er nogle problemer!',
    'installation.check.error.accounts' => '/site/accounts er ikke skrivbar',
    'installation.check.error.avatars' => '/assets/avatars er ikke skrivbar',
    'installation.check.error.blueprints' => 'Tilføj venligst en /site/blueprints mappe',
    'installation.check.error.content' => 'Content mappen samt alle underliggende filer og mapper skal være skrivbare.',
    'installation.check.error.thumbs' => 'Thumbs mappen skal være skrivbar.',
    'installation.signup.username.label' => 'Opret din første konto',
    'installation.signup.username.placeholder' => 'Brugernavn',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'mail@eksempel.dk',
    'installation.signup.password.label' => 'Adgangskode',
    'installation.signup.language.label' => 'Sprog',
    'installation.signup.button' => 'Opret din konto',

    // login
    'login' => 'Log ind',
    'login.welcome' => 'Log venligst ind med din nye konto',
    'login.username.label' => 'Brugernavn',
    'login.password.label' => 'Adgangskode',
    'login.error' => 'Ugyldigt brugernavn eller adgangskode',
    'login.button' => 'Log ind',

    // logout
    'logout' => 'Log ud',

    // dashboard
    'dashboard' => 'Dashboard',
    'dashboard.index.pages.title' => 'Sider',
    'dashboard.index.pages.add' => 'Ny',
    'dashboard.index.site.title' => 'Dit websites URL',
    'dashboard.index.account.title' => 'Din konto',
    'dashboard.index.account.edit' => 'Rediger',
    'dashboard.index.metatags.title' => 'Website-variable',
    'dashboard.index.metatags.edit' => 'Rediger',
    'dashboard.index.history.title' => 'Dine seneste ændringer',
    'dashboard.index.history.text' => 'Dine senest ændrede sider vil blive vist her, for at gøre det nemt at finde dem igen senere.',

    // metatags
    'metatags' => 'Website-variable',
    'metatags.back' => 'Tilbage til dashboard',

    // pages
    'pages.show.settings' => 'Sideindstillinger',
    'pages.show.preview' => 'Åben eksempel',
    'pages.show.changeurl' => 'Skift URL',
    'pages.show.delete' => 'Slet denne side',
    'pages.show.subpages.title' => 'Sider',
    'pages.show.subpages.add' => 'Tilføj',
    'pages.show.subpages.empty' => 'Denne side har ingen undersider',
    'pages.show.files.title' => 'Filer',
    'pages.show.files.add' => 'Tilføj',
    'pages.show.files.empty' => 'Denne side har ingen filer',
    'pages.show.error.permissions.title' => 'Siden er ikke skrivbar',
    'pages.show.error.permissions.text'  => 'Kontroller venligst rettigheds-indstillingerne for content mappen samt alle filer.',
    'pages.show.error.permissions.retry'  => 'Prøv igen',
    'pages.show.error.notitle.title' => 'Dette blueprint har intet titel-felt',
    'pages.show.error.notitle.text' => 'Tilføj venligst et titel-felt og prøv igen',
    'pages.show.error.notitle.retry' => 'Prøv igen',
    'pages.show.error.form'  => 'Udfyld venligst alle felter korrekt',

    'pages.add.title.label' => 'Tilføj en ny side',
    'pages.add.title.placeholder' => 'Titel',
    'pages.add.url.label' => 'URL-appendiks',
    'pages.add.url.enter' => '(indtast din titel)',
    'pages.add.url.close' => 'Luk',
    'pages.add.url.help' => 'Format: små bogstaver a-z, 0-9 samt almindelige bindestreger',
    'pages.add.template.label' => 'Skabelon',
    'pages.add.error.title' => 'Titlen mangler',
    'pages.add.error.template' => 'Skabelonen manger',
    'pages.add.error.max.headline' => 'Der tillades ikke nye sider',
    'pages.add.error.max.text' => 'Det maksimale antal undersider for denne side er nået.',
    'pages.url.uid.label' => 'URL-appendiks',
    'pages.url.uid.label.option' => 'Generer udfra titel',
    'pages.url.error.exists' => 'En side med samme appendiks eksisterer allerede',
    'pages.url.error.move' => 'URL-appendikset kunne ikke ændres',
    'pages.delete.headline' => 'Ønsker du virkelig at slette denne side?',
    'pages.delete.error.home.headline' => 'Forsiden kunne ikke slettes',
    'pages.delete.error.home.text' => 'Du forsøger at slette forsiden. Dette er ikke muligt da det ville lede til et uønsket resultat.',
    'pages.delete.error.error.headline' => 'Fejlsiden kan ikke slettes',
    'pages.delete.error.error.text' => 'Du forsøger at slette forsiden. Dette er ikke muligt da det ville lede til et uønsket resultat.',
    'pages.delete.error.children.headline' => 'Siden kan ikke slettes',
    'pages.delete.error.children.text' => 'Denne side har undersider og kan derfor ikke slettes. Slet venligst alle undersider først.',
    'pages.delete.error.blocked.headline' => 'Siden kan ikke slettes',
    'pages.delete.error.blocked.text' => 'Denne side er låst og kan derfor ikke slettes.',
    'pages.search.help' => 'Søg efter sider udfra URL. Naviger igennem søgeresultater med dine op- og ned-piletaster og tast enter for at hoppe til den valgte side.',
    'pages.search.noresults' => 'Søgningen gav intet resultat. Prøv venligst igen med en anden URL.',
    'pages.error.missing' => 'Siden kunne ikke findes',

    // subpages
    'subpages' => 'Sider',
    'subpages.index.headline' => 'Sider i',
    'subpages.index.back' => 'Tilbage',
    'subpages.index.add' => 'Tilføj en ny side',
    'subpages.index.add.first.text' => 'Denne side har ingen undersider endnu',
    'subpages.index.add.first.button' => 'Tilføj den første side',
    'subpages.index.visible' => 'Synlige sider',
    'subpages.index.visible.help' => 'Træk usynlige sider hertil for at sortere dem og gøre dem synlige.',
    'subpages.index.invisible' => 'Usynlige sider',
    'subpages.index.invisible.help' => 'Træk synlige sider hertil for at gøre dem usynlige.',
    'subpages.error.missing' => 'Siden blev ikke fundet',

    // files
    'files' => 'Filer',
    'files.index.headline' => 'Filer for',
    'files.index.back' => 'Tilbage',
    'files.index.upload' => 'Upload en ny fil',
    'files.index.upload.first.text' => 'Denne side har ingen filer endnu',
    'files.index.upload.first.button' => 'Upload den første fil',
    'files.index.edit' => 'Rediger',
    'files.index.delete' => 'Slet',
    'files.show.name.label' => 'Filnavn',
    'files.show.info.label' => 'Type / Vægt / Dimensioner',
    'files.show.link.label' => 'Offentligt link',
    'files.show.open' => 'Se og hent fil',
    'files.show.back' => 'Tilbage',
    'files.show.replace' => 'Erstat',
    'files.show.delete' => 'Slet',
    'files.show.error.rename' => 'Filen kunne ikke omdøbes',
    'files.show.error.form' => 'Udfyld venligst alle felter korrekt',
    'files.upload.drop' => 'Træk filer hertil…',
    'files.upload.click' => '…eller klik for at uploade',
    'files.replace.drop' => 'Træk en fil hertil…',
    'files.replace.click' => '…eller klik for at erstatte',
    'files.replace.error.type' => 'Den valgte fil skal være af samme filtype',
    'files.delete.headline' => 'Ønsker du virkelig at slette denne fil?',
    'files.error.missing.page' => 'Siden kunne ikke findes',
    'files.error.missing.file' => 'Filen kunne ikke findes',

    // users
    'users' => 'Brugere',
    'users.index.headline' => 'Alle brugere',
    'users.index.add' => 'Tilføj en ny bruger',
    'users.index.edit' => 'Rediger',
    'users.index.delete' => 'Slet',
    'users.form.username.label' => 'Brugernavn',
    'users.form.username.placeholder' => 'Dit brugernavn',
    'users.form.username.help' => 'Tilladte tegn: små bogstaver a-z, 0-9 og bindestreger',
    'users.form.username.readonly' => 'Brugernavnet kan ikke ændres',
    'users.form.firstname.label' => 'Fornavn',
    'users.form.lastname.label' => 'Efternavn',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'mail@eksempel.dk',
    'users.form.password.label' => 'Adgangskode',
    'users.form.password.confirm.label' => 'Bekræft adgangskode',
    'users.form.password.new.label' => 'Ny adgangskode',
    'users.form.password.new.confirm.label' => 'Bekræft den nye adgangskode',
    'users.form.password.new.help' => 'Lad stå tomt for at beholde den nuværende adgangskode',
    'users.form.language.label' => 'Sprog',
    'users.form.role.label' => 'Role',
    'users.form.options.headline' => 'Konto instillinger',
    'users.form.options.message' => 'Send email',
    'users.form.options.delete' => 'Slet konto',
    'users.form.avatar.headline' => 'Profilbillede',
    'users.form.avatar.upload' => 'Upload profilbillede',
    'users.form.avatar.replace' => 'Erstat profilbillede',
    'users.form.avatar.delete' => 'Slet profilbillede',
    'users.form.back' => 'Tilbage til brugere',
    'users.form.error.password.confirm' => 'Bekræft venligst adgangskoden',
    'users.form.error.update' => 'Brugeren kunne ikke redigeres',
    'users.form.error.create' => 'Brugeren kunne ikke oprettes',
    'users.form.error.permissions.title' => 'Account mappen er ikke skrivbar',
    'users.form.error.permissions.text' => 'Sørg venligst for at /site/accounts eksisterer og er skrivbar.',
    'users.delete.headline' => 'Ønsker du virkelig at slette denne bruger?',
    'users.delete.error' => 'Brugeren kunne ikke slettes',
    'users.avatar.drop' => 'Træk et profilbillede hertil…',
    'users.avatar.click' => '…eller klik for at vælge',
    'users.avatar.error.type' => 'Du kan kun bruge JPG, PNG og GIF filer',
    'users.avatar.error.folder.headline' => 'Avatar mappen er ikke skrivbar',
    'users.avatar.error.folder.text' => 'Opret venligst mappen <strong>/assets/avatars</strong> og sørg for at den er skrivbar.',
    'users.avatar.delete.error' => 'Profilbilledet kunne ikke slettes',
    'users.avatar.delete.success' => 'Profilbilledet er nu slettet',
    'users.error.missing' => 'Brugeren kunne ikke findes',

    // form fields
    'fields.required' => 'Påkrævet',
    'fields.date.label' => 'Dato',
    'fields.date.months' => array(
      'Januar',
      'Februar',
      'Marts',
      'April',
      'Maj',
      'Juni',
      'Juli',
      'August',
      'September',
      'Oktober',
      'November',
      'December'
    ),
    'fields.date.weekdays' => array(
      'Søndag',
      'Mandag',
      'Tirsdag',
      'Onsdag',
      'Torsdag',
      'Fredag',
      'Lørdag'
    ),
    'fields.date.weekdays.short' => array(
      'Søn',
      'Man',
      'Tir',
      'Ons',
      'Tor',
      'Fre',
      'Lør'
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'mail@eksempel.dk',
    'fields.number.label' => 'Nummer',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Side',
    'fields.page.placeholder' => 'sti/til/side',
    'fields.password.label' => 'Adgangskode',
    'fields.structure.add' => 'Tilføj',
    'fields.structure.add.first' => 'Tilføj den første indtastning',
    'fields.structure.empty' => 'Ingen indtastninger endnu.',
    'fields.structure.cancel' => 'Annuller',
    'fields.structure.save' => 'Gem',
    'fields.structure.edit' => 'Rediger',
    'fields.structure.delete' => 'Slet',
    'fields.tags.label' => 'Tags',
    'fields.tel.label' => 'Telefon',
    'fields.textarea.buttons.bold.label' => 'Fed tekst',
    'fields.textarea.buttons.bold.text' => 'Fed tekst',
    'fields.textarea.buttons.italic.label' => 'Kursiv tekst',
    'fields.textarea.buttons.italic.text' => 'Kursiv tekst',
    'fields.textarea.buttons.link.label' => 'Link',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Billede',
    'fields.textarea.buttons.file.label' => 'Fil',
    'fields.toggle.yes' => 'Ja',
    'fields.toggle.no' => 'Nej',
    'fields.toggle.on' => 'Til',
    'fields.toggle.off' => 'Fra',

    // textarea overlays
    'editor.link.url.label' => 'Indsæt URL',
    'editor.link.text.label' => 'Link tekst',
    'editor.link.text.help' => 'Link tekst er valgfri',
    'editor.email.address.label' => 'Indsæt email adresse',
    'editor.email.address.placeholder' => 'mail@eksempel.dk',
    'editor.email.text.label' => 'Link tekst',
    'editor.email.text.help' => 'Link tekst er valgfri',
    'editor.file.empty' => 'Denne side har ingen filer',
    'editor.image.empty' => 'Denne side har ingen billeder',

    // error page
    'error' => 'Fejl',
    'error.headline' => 'Fejl',

  )
);
