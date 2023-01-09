AdditionalFormInputs extension for MediaWiki
============================================

This extension provides additional form inputs to other extensions:

- HTMLUnsignedIntField: extends HTMLIntField and allows only unsigned integers
- HTMLSelectWithButton: a select with a button next to it. A mixin of HTMLSelectField and HTMLFormFieldWithButton.

## Changelog
- 0.4.0: Remove HTMLTitleTextFieldFixed, backport no longer needed
- 0.3.0: HTMLTitleTextFieldFixed (a backport from MW 1.32 of HTMLTitleTextField)
- 0.2.0: HTMLSelectWithButton
- 0.1.0: HTMLUnsignedIntField
