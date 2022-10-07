<ul class="dropdown dropdown--feat" style="display:none;">

  <div class="dropdown-secondary-bg dropdown__singlelineList">
    <li class="dropdown__item">
      <a class="nav-item dropdown__link" href="{{ site_url( 'features/' ) }}">
        <span class="dropdown__icon">@svg('icons/codefresh-leaf')</span>
        <span class="dropdown__desc">
          <strong class="dropdown__title">Our Features</strong>
        </span>
      </a>
    </li>
    <li class="dropdown__item">
      <a class="nav-item dropdown__link" href="{{ site_url( 'gitops-enterprise/' ) }}">
        <span class="dropdown__icon">@svg('icons/gitops')</span>
        <span class="dropdown__desc">
          <strong class="dropdown__title">GitOps</strong>
        </span>
      </a>
    </li>
    <li class="dropdown__item">
      <a class="nav-item dropdown__link" href="{{ site_url( 'argo-codefresh/' ) }}">
        <span class="dropdown__icon">@svg('icons/argo')</span>
        <span class="dropdown__desc">
          <strong class="dropdown__title">Enterprise Argo CD</strong>
        </span>
      </a>
    </li>
    <li class="dropdown__item">
      <a class="nav-item dropdown__link" href="{{ site_url( 'kubernetes-cd/' ) }}">
        <span class="dropdown__icon">@include('elements.icons.kubernetes')</span>
        <span class="dropdown__desc">
          <strong class="dropdown__title">Kubernetes CD</strong>
        </span>
      </a>
    </li>
    <li class="dropdown__item">
      <a class="nav-item dropdown__link" href="{{ site_url( 'what-are-canary-deployments/' ) }}">
        <span class="dropdown__icon">@svg('icons/canary3')</span>
        <span class="dropdown__desc">
          <strong class="dropdown__title">Canary Deployments</strong>
        </span>
      </a>
    </li>
    <li class="dropdown__item">
      <a class="nav-item dropdown__link" href="{{ site_url( 'blue-green-deployments-kubernetes/' ) }}">
        <span class="dropdown__icon relative top-1.5 left-1.5">@svg('icons/traffic-light')</span>
        <span class="dropdown__desc">
          <strong class="dropdown__title">Blue/Green Deployments</strong>
        </span>
      </a>
    </li>
  </div>

</ul>
