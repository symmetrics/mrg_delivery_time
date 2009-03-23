# encoding: utf-8

# package info
name = 'symmetrics_module_delivery_time'
tags = ('magento', 'module')

# relations
requires = {
}
excludes = {
}

# who is responsible for this package?
team_leader = {
    'Sergej Braznikov': 'sb@symmetrics.de'
}

# who should check this package in the first place?
maintainer = {
    'Sergej Braznikov': 'sb@symmetrics.de'
}

# relative installation path (e.g. app/code/local)
install_path = ''

# additional infos
info = 'Lieferzeit für Produkte'
summary = '''
    Jedes Produkt im Adminbereich (Backend) verfügt über ein neues Attribut "Lieferzeit".
    Zusätzlich wird das Attribut in Produktübersicht als neue Spalte dargestellt.
'''
notes = '''
    [special notes, restrictions, bugs etc.]
'''
license = 'AFL 3.0'
authors = {
    'Sergej Braznikov': 'sb@symmetrics.de'
}
homepage = 'http://www.symmetrics.de'

# files this package depends on
depends_on_files = (
    'app/core/code/Mage/Adminhtml/Block/Catalog/Product/Grid.php',
    'app/core/code/Mage/Sales/Block/Order/Item/Renderer/Default.php',
    'app/core/code/Mage/Eav/Model/Entity/Setup.php',
)
