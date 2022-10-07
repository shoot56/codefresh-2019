<div class="bg-oxford-blue-50 rounded-xl pt-2 px-2 pb-68">
<pre id="code-snippet" class="line-numbers">
<code class="language-yaml">version: "1.0"

steps:
  clone_repo:
    type: git-clone
    repo: $@{{CF_BRANCH}}
    stage: "clone"

  build_docker_image:
    type: build
    image_name: "codefresh-io/cli"
    working_directory: "$@{{clone}}"
    dockerfile: "Dockerfile"
    environment:
      - SECRET=$@{{secrets.secret-name}}

  deploy_to_k8s:
    type: deploy
    cluster: cluster-name
    service: service-name
    namespace: default
    stage: deploy

  custom_step:</code></pre>
</div>
