#!/bin/bash

set -eu  

export fly_target=${fly_target:-storage-auctions}
echo "Concourse API target ${fly_target}"
  
fly -t ${fly_target} validate-pipeline --config pipeline.yml
fly -t ${fly_target} set-pipeline -p maha-pipeline -c pipeline.yml --load-vars-from=credentials.yml
fly -t ${fly_target} unpause-pipeline -p maha-pipeline 
fly -t ${fly_target} trigger-job -w -j maha-pipeline/job-deploy-prod
