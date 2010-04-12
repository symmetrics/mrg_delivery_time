# encoding: utf-8

# =============================================================================
# package info
# =============================================================================
NAME = 'symmetrics_module_delivery_time'

TAGS = ('magento', 'symmetrics', 'module', 'delivery', 'time', 'germanconfig', 'locpack')

LICENSE = 'AFL 3.0'

HOMEPAGE = 'http://www.symmetrics.de'

INSTALL_PATH = ''

# =============================================================================
# responsibilities
# =============================================================================
TEAM_LEADER = {
    'Torsten Walluhn': 'tw@symmetrics.de'
}

MAINTAINER = {
    'Torsten Walluhn': 'tw@symmetrics.de'
}

AUTHORS = {
    'Sergej Braznikov': 'sb@symmetrics.de',
    'Yauhen Yakimovich': 'yy@symmetrics.de'
}

# =============================================================================
# additional infos
# =============================================================================
INFO = 'Lieferzeit für Produkte'

SUMMARY = '''
    Jedes Produkt im Adminbereich (Backend) verfügt über ein neues Attribut
    "Lieferzeit". Zusätzlich wird das Attribut in Produktübersicht als neue
    Spalte dargestellt.
'''

NOTES = '''
'''

# =============================================================================
# relations
# =============================================================================
REQUIRES = [
    {'magento': '*', 'magento_enterprise': '*'}, 
]

EXCLUDES = {
}

DEPENDS_ON_FILES = (
    'app/code/core/Mage/Adminhtml/Block/Catalog/Product/Grid.php',
    'app/code/core/Mage/Sales/Block/Order/Item/Renderer/Default.php',
)

PEAR_KEY = ''

COMPATIBLE_WITH = {
    'magento': ['1.4.0.0'],
    'magento_enterprise': ['1.7.0.0'],
}
