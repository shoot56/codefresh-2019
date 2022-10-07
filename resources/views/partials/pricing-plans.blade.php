<?php /*
<script type="text/javascript">
var scrollToCalculator = function()
{
  document.getElementById('calculatorDetails').setAttribute('open', 'true');
  document.getElementById('calculator').scrollIntoView({behavior: 'smooth'});
}
</script>
*/?>

<script type="text/javascript">
var scrollToAndOpenFaqItem = function(faqId)
{
  var faqIdName = 'post-' + faqId;
  var faqOpenButton = '#' + faqIdName + ' .accordionItem';
  console.log (faqOpenButton);
  document.querySelector(faqOpenButton).style.display = 'block';
  document.getElementById(faqIdName).scrollIntoView({behavior: 'smooth'});
}
</script>

<img src="/wp-content/themes/codefresh-2019/dist/images/nk/bg-3a.svg" style="height: 100%; position: absolute; right: 0; top: 0; max-height: 780px;">

<div class="cmp-21a-pricing pt-20 relative">

  <div class="pricing-hero-text mt-20 mb-12 text-center">
    <h1 class="text-3xl text-white mb-2">Deploy more and fail less. Flexible pricing for every DevOps team.</h1>
    <p class="text-lg text-white mb-0">Sign up now, upgrade anytime. Every new account gets a 14-day trial of our Enterprise plan.</p>
  </div>

  <div class="plan-list inline-flex flex-wrap text-center text-black">

    <div class="plan-list-item plan-basic">
      <div class="plan-card bg-white border-t-8 border-nk-gray3point5">
        <div class="plan-title font-medium text-nk-gray3point5">Free</div>
        <?php // <div class="plan-starting-from underline">Starting From</div> ?>
        <div class="price-wrapper">
          <span class="price-delimiter"></span>
          <span class="price-amount"></span>
          <span class="price-frequency">Community Edition</span>
        </div>
        <ul class="plan-feature-list">
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-gray3point5')</span>
            Up to 5 developers
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-gray3point5')</span>
            Up to 1 Argo Runtime
          </li>
          <li class="plan-callout">Includes</li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-gray3point5')</span>
            Unlimited deployments & builds
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-gray3point5')</span>
            1 week data retention
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-gray3point5')</span>
            Community support
          </li>
          <li>
            &nbsp;
          </li>
        </ul>
        <div class="plan-button">
          <a href="/codefresh-signup/" class="btn-bl btn-bl-nk-gray3point5-outline block">
            Get Started
          </a>
        </div>
      </div>
    </div>

    <div class="plan-list-item plan-pro">
      <div class="plan-card bg-white border-t-8 border-nk-primary">
        <div class="plan-title font-bold text-nk-primary">Team</div>
        <?php // <div class="plan-starting-from underline">Starting From</div> ?>
        <div class="price-wrapper">
          <span class="price-delimiter">$</span>
          <span class="price-amount">49</span>
          <span class="price-frequency">USD per month <a style="cursor: pointer; text-decoration: underline;" onclick="scrollToAndOpenFaqItem('21045')">per developer</a></span>
        </div>
        <ul class="plan-feature-list">
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark')</span>
            Up to 15 developers
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark')</span>
            Up to 2 Argo Runtimes
          </li>
          <li class="plan-callout">Includes <em>Free</em> features, PLUS:</li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark')</span>
            1 month data retention
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark')</span>
            SLA Guarantee
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark')</span>
            Standard support
          </li>
          <li>
            &nbsp;
          </li>
        </ul>
        <div class="plan-button">
          <a href="/codefresh-signup/" class="btn-bl btn-bl-nk-primary-outline block">
            Start Trial
          </a>
        </div>
      </div>
    </div>

    <div class="plan-list-item plan-enterprise">
      <div class="plan-card bg-white border-t-8 border-nk-orange-argo">
        <div class="plan-title font-black text-nk-orange-argo">Enterprise</div>
        <?php // <div class="plan-starting-from underline">Starting From</div> ?>
        <div class="price-wrapper">
          <span class="price-delimiter"></span>
          <span class="price-amount"></span>
          <span class="price-frequency">Contact Sales</span>
        </div>
        <ul class="plan-feature-list">
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-orange-argo')</span>
            Up to unlimited developers
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-orange-argo')</span>
            Up to unlimited Argo Runtimes
          </li>
          <li class="plan-callout">Includes <em>Team</em> features, PLUS:</li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-orange-argo')</span>
            Up to unlimited data retention
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-orange-argo')</span>
            Single Sign On
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-orange-argo')</span>
            RBAC
          </li>
          <li>
            <span class="inline-block mr-2">@svg('icons/checkmark-nk-orange-argo')</span>
            Optional Enterprise support
          </li>
        </ul>
        <div class="plan-button">
          <a href="/request-a-demo/" class="btn-bl btn-bl-primary block">
            Request Demo
          </a>
        </div>
      </div>
    </div>


    <div class="text-center">
      <div class="text-white inline-block mx-auto">
        <div class="text-3xl font-display font-bold mt-4 mb-4">All plans include</div>
        <div class="text-base all-include-list md:grid grid-cols-4 flex flex-wrap gap-4">
          <div>Centralized management of Argo, Git, logins, and secrets</div>
          <div>Unified interface for code-to-cloud visibility</div>
          <div>Argo component intercompatibility testing</div>
          <div>Rigorous security validations</div>
          <div>Extended functionality to manage application lifecycles</div>
          <div>Key native integrations for software delivery workflows</div>
          <div>Traceability from source code to artifact to endpoint</div>
          <div>Integrate project management into the release lifecycle</div>
        </div>
      </div>
    </div>

  </div>

</div>
