import { __ } from "@wordpress/i18n";
import { TextControl, Button } from "@wordpress/components";
import { useBlockProps } from "@wordpress/block-editor";

/* Block name */
export const name = `test/test-block`;

/* Block title */
export const title = __(`Test block`, `radicle`);

/* Block category */
export const category = `text`;

/* Block attributes */
export const attributes = {
  nameText: {
    type: `string`,
    default: __(``, `radicle`),
  },
  surnameText: {
    type: `string`,
    default: __(``, `radicle`),
  },
  emailText: {
    type: `string`,
    default: __(``, `radicle`),
  },
};

/* Block edit */
export const edit = ({attributes, setAttributes}) => {
  const {nameText, surnameText, emailText} = attributes;
  const blockProps = useBlockProps();

  const handleNameChange = (nameText: string) => setAttributes({ nameText });
  const handleSurnameChange = (surnameText: string) => setAttributes({ surnameText });
  const handleEmailChange = (emailText: string) => setAttributes({ emailText });

  return (
    <div {...blockProps}>
      <TextControl
        label={__("Name", "radicle")}
        value={nameText}
        onChange={handleNameChange}
      />
      <TextControl
        label={__("Surname", "radicle")}
        value={surnameText}
        onChange={handleSurnameChange}
      />
      <TextControl
        label={__("Email", "radicle")}
        value={emailText}
        onChange={handleEmailChange}
      />
      <h2 style={{ color: 'red' }}>{`${nameText} ${surnameText}`}</h2>
      {/*<Button style={{ backgroundColor: 'blue' }} onClick={handleClick}>*/}
      {/*  {__("Premimi", "radicle")}*/}
      {/*</Button>*/}
    </div>
  );
};

/* Block save */
export const save = ({attributes}) => {
  const {nameText, surnameText, emailText} = attributes;
  const blockProps = useBlockProps.save();

  const handleClick = () => {
    alert(`Email: ${emailText}`);
  };

  return (
    <div {...blockProps}>
      <h2 style={{ color: 'red' }}>{`${nameText} ${surnameText}`}</h2>
      <Button style={{ backgroundColor: 'blue' }} onClick={handleClick}>
        {__("Premimi", "radicle")}
      </Button>
    </div>
  );
};

/* Register block */
// registerBlockType(name, {
//   title,
//   category,
//   attributes,
//   edit,
//   save,•
// });
