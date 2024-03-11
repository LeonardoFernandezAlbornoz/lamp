<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.tax_rule_group_choice_provider' shared service.

return $this->services['prestashop.core.form.choice_provider.tax_rule_group_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\TaxRuleGroupChoiceProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->country->id, ($this->services['PrestaShop\\PrestaShop\\Adapter\\TaxRulesGroup\\Repository\\TaxRulesGroupRepository'] ?? $this->load('getTaxRulesGroupRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tax\\TaxComputer'] ?? $this->load('getTaxComputerService.php')));