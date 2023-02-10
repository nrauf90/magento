# How to Create Custom Console Command in Magento 2?

## Steps:

Creating a custom console command in Magento 2 involves the following steps:

- Create a Module: Start by creating a module, if you don’t already have one. To create a new module, create the
  following directory structure in the “app/code” folder:<br/>
![folders-structure-for-magento-2-module](https://github.com/nrauf90/magento/blob/main/images/folder-structure.png?raw=true)
<br/>
- Create a module.xml file in the “etc” folder and add the following code:<br/>
![module-xm-file](https://github.com/nrauf90/magento/blob/main/images/module.xml.png?raw=true)
<br/>
- And create a registration.php file in the same folder to register your module:<br/>
![registration php file](https://github.com/nrauf90/magento/blob/main/images/registration.php.png?raw=true)
<br/>
- Create a Command Class: In the “/app/code/SNP/CLICustomCommand/Command” folder, create a Command class named
  “SNPCLICustomCommand.php” and add the following code:<br/>
![Console command class](https://github.com/nrauf90/magento/blob/main/images/console-command.png?raw=true)
  <br/>
- Define the Command: In the Command class, you need to define the command by implementing the “configure” method and
  adding the name, description and options of your command. In this example, we are defining a simple “snp:welcome”
  command with a description.<br/>
![configure function](https://github.com/nrauf90/magento/blob/main/images/configure-function.png?raw=true)
<br/>
- Implement the Execute Method: Implement the “execute” method that will be executed when the command is run. This
  method should contain the logic of your command. In this example, we are printing a simple “Welcome!” message.<br/>
![Console command class](https://github.com/nrauf90/magento/blob/main/images/execure-function.png?raw=true)
  <br/>
- Add the Command to di.xml: In the “etc” folder of your module, create a “di.xml” file and add the following code to
  register your custom command:<br/>
![di xml file](https://github.com/nrauf90/magento/blob/main/images/di.xml.png?raw=true)
  <br/>
- Final Module Structure:<br/>
- ![final module stucture](https://github.com/nrauf90/magento/blob/main/images/final-module-structure.png?raw=true)
  <br/>
- Run the Command: open the terminal, navigate to the Magento root directory, Run the magento Setup upgrade command to
  make sure magento register you module<br/> `[root]: php bin/magento setup:upgrade`
- Run the Command: Finally, open the terminal, navigate to the Magento root directory, and run the command using the
  following syntax: <br/>`php bin/magento snp:welcome`

##### Note:

Replace [VendorName] and [ModuleName] with your specific module name.
